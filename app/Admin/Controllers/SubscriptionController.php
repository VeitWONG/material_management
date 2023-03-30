<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryExchangeTable;
use App\Admin\Renderable\materialTable;
use App\Admin\Renderable\materialTable2;
use App\Admin\Repositories\Subscription;
use App\Models\InventoryExchange;
use App\Models\MaterialInformation;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends AdminController
{
    /**
     * 创建表格.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Subscription(), function (Grid $grid) {
            $grid->model()->with('materialinformation');
            $grid->column('id')->sortable();
            $grid->column('materialinformation.m_byword','资材代号');
            $grid->column('materialinformation.m_name','资材名称');
            $grid->column('materialinformation.m_type','资材型号');
            $grid->column('requisition_orders');
            $grid->column('applicant');
            $grid->column('request_time','申购时间');
            $grid->column('quantity');
            $grid->column('order_status')->display(function (){
                if ($this->order_status == 1){
                    return "待审";
                }elseif($this->order_status == 2){
                    return "通过";
                }elseif($this->order_status == 3){
                    return "驳回";
                }elseif($this->order_status == 4){
                    return "撤销";
                }
            })->label([
                1 => 'primary',
                2 => 'success',
                3 => '#FF0000',
                4 => 'black'
            ])->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(6);
                $filter->equal('materialinformation.m_byword','资材代号')->width(6);
                $filter->like('materialinformation.m_name','资材名称')->width(6);
                $filter->equal('order_status')->radio([1 =>'待审',2 => '通过',3 => '驳回',4 =>'撤销'])->width(12);
                $filter->panel();
                $filter->expand(false);
        
            });
            $grid->enableDialogCreate();
            $grid->addTableClass('table-text-center'); //列居中
            $grid->disableEditButton();
            $grid->disableDeleteButton();
            $grid->setActionClass(Grid\Displayers\Actions::class);
        });
    }

    /**
     * 创建详情表单.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Subscription(['materialinformation']), function (Show $show) {
            
            $show->field('id');
            $show->field('materialinformation.m_byword','资材代号');
            $show->field('materialinformation.m_type','资材名称');
            $show->field('requisition_orders');
            $show->field('applicant');
            $show->field('quantity');
            $show->field('order_status')->as(function (){
                if ($this->order_status == 1){
                    return "待审核";
                }elseif($this->order_status == 2){
                    return "已通过";
                }elseif($this->order_status == 3){
                    return "驳回";
                }elseif($this->order_status == 4){
                    return "撤销";
                }
            });
            $show->field('request_time','申购时间');
        });
    }

    /**
     * 创建新增表单.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Subscription(), function (Form $form) {
            $form->confirm('您确定要提交表单吗?');
            $form->display('id');
            
            $form->selectTable('material_information_id','申购资材')
            ->title('资材信息表')
            ->from(materialTable2::make())
            ->model(MaterialInformation::class,'id','m_type');
            // $form->selectTable('inventory_exchanges_id','库存往来单号')
            // ->title('库存往来列表')
            // ->from(inventoryExchangeTable::make()->payload(['id' => '']))//inventory_exchange,id传递空值，以显示所有往来账单
            // ->model(InventoryExchange::class,'id','inbound_order');


            
            $form->text('requisition_orders')->value('SG'.$this->makeRand());
            $form->text('applicant')->default(Admin::user()->username);
            $form->datetime('request_time');
            $form->number('quantity')->default(1);
            //$form->text('m_byword');


            $form->saving(function (Form $form){
                if ($form->isCreating()){
                    $inventoryExchangeId = $form->inventory_exchanges_id;
                    $addedQuantity = $form->quantity;
                    $result = $this->quantity_count_update($inventoryExchangeId,$addedQuantity);
                    
                }
            });
        });
    }

    protected function makeRand($num = 6)
    {
        mt_srand((double)microtime() * 1000000);//用 seed 来给随机数发生器播种。
        $strand = str_pad(mt_rand(1, 99999),$num,"0",STR_PAD_LEFT);
        return date('Ymd').$strand;
    }

    public function quantity_count_update($exchangeId,$newQuantity){
        
        $old_count = 0;
        foreach(DB::select('select * from inventory_exchanges where id = ?',[$exchangeId]) as $ob_inventory_exchange){
            $old_count = $ob_inventory_exchange->quantity_received;
        }
        
        
        return DB::update("update 'inventory_exchanges' set 'quantity_received' = :test WHERE `id` = :id",
        ['test' => ($newQuantity+$old_count), 'id' => $exchangeId]);//返回受影响的行数
        
    }
   
}
