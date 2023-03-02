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
            $grid->column('materialinformation.m_name','资材名称');
            $grid->column('materialinformation.m_type','资材型号');
            $grid->column('requisition_orders');
            $grid->column('applicant');
            $grid->column('request_time');
            $grid->column('quantity');
            $grid->column('m_byword');
            $grid->column('order_status')->display(function (){
                if ($this->order_status == 1){
                    return "待审核";
                }elseif($this->order_status == 2){
                    return "已审核";
                }
            });
            $grid->column('created_at','申请时间')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
            $grid->enableDialogCreate();
            $grid->addTableClass('table-text-center'); //列居中
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
        return Show::make($id, new Subscription(), function (Show $show) {
            $show->field('id');
            $show->field('material_information_id');
            $show->field('requisition_orders');
            $show->field('applicant');
            $show->field('request_time');
            $show->field('quantity');
            $show->field('m_byword');
            $show->field('order_status')->as(function (){
                if ($this->order_status == 1){
                    return "待审核";
                }elseif($this->order_status == 2){
                    return "已审核";
                }
            });
            $show->field('updated_at');
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
            $form->confirm('您确定要提交表单吗？');
            $form->display('id');
            
            $form->selectTable('material_information_id','申购资材')
            ->title('资材信息表')
            ->from(materialTable2::make())
            ->model(MaterialInformation::class,'id','m_type');
            
            $form->text('requisition_orders')->value('SG'.$this->makeRand());
            $form->text('applicant')->default(Admin::user()->username);
            $form->datetime('request_time');
            $form->number('quantity')->default(1);
            $form->text('m_byword');

            $form->display('created_at');
            $form->display('updated_at');
            
        });
    }

    protected function makeRand($num = 6)
    {
        mt_srand((double)microtime() * 1000000);//用 seed 来给随机数发生器播种。
        $strand = str_pad(mt_rand(1, 99999),$num,"0",STR_PAD_LEFT);
        return date('Ymd').$strand;
    }

    
}
