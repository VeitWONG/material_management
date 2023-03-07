<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryTable2;
use App\Admin\Repositories\InventoryExchange;
use App\Models\Inventory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\Displayers\Button;
use Dcat\Admin\Grid\Filter\Where;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Dropdown;
use Dcat\Admin\Widgets\Metrics\Card;
use Dcat\Admin\Widgets\Radio;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

class InventoryExchangeController extends AdminController
{
    /**
     * 创建表格.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new InventoryExchange(), function (Grid $grid) {
            $grid->model()->with('inventory');
            $grid->column('id')->sortable();
            $grid->column('inventory.inventory_batches','库存批次');
            $grid->column('type')->display(function (){
                if ($this->type == 1){
                    return "出库";
                }elseif($this->type == 2){
                    return "入库";
                }
            });
            $grid->column('inbound_order');
            $grid->column('quantity_received');
            $grid->column('acceptance_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->like('inbound_order');
                $filter->equal('type')->radio([1=>'出库',2=>'入库']);
                $filter->like('acceptance_at');
        
            });
            
            $grid->addTableClass('table-text-center'); //列居中
            $grid->enableDialogCreate();
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
        return Show::make($id, new InventoryExchange(['inventory']), function (Show $show) {
            $show->field('id');
            $show->field('inventory.inventory_batches','库存批次');
            $show->field('inbound_order');
            $show->field('quantity_received');
            $show->field('acceptance_at');
        });
    }

    /**
     * 创建新增表单.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new InventoryExchange(), function (Form $form) {
            
            
            $form->display('id');
            $form->radio('type')->options([1=>'出库',2 =>'入库']);
            $form->text('inbound_order')->value('WL'.$this->makeRand());
            
            $form->selectTable('inventory_id','库存批次')
            ->title('库存批次')
            ->from(inventoryTable2::make())
            ->model(Inventory::class,'id','inventory_batches');
            $form->number('quantity_received')->width(6)->maxLength(7)->type('number');
            $form->datetime('acceptance_at')->width(6);
            
            /*
            $form->submitted(function (Form $form){
                return $form->response()->error("哦唷,出错咯~");
            });
            */
        });
    }

    protected function makeRand($num = 6)
    {
        mt_srand((double)microtime() * 1000000);//用 seed 来给随机数发生器播种。
        $strand = str_pad(mt_rand(1, 99999),$num,"0",STR_PAD_LEFT);
        return date('Ymd').$strand;
    }
}
