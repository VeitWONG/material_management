<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\InventoryExchange;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\Displayers\Button;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Dropdown;
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
            $grid->column('id')->sortable();
            $grid->column('inventory_id');
            $grid->column('inbound_order');
            $grid->column('quantity_received');
            $grid->column('acceptance_at');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
            
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
        return Show::make($id, new InventoryExchange(), function (Show $show) {
            $show->field('id');
            $show->field('inventory_id');
            $show->field('inbound_order');
            $show->field('quantity_received');
            $show->field('acceptance_at');
            $show->field('created_at');
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
        return Form::make(new InventoryExchange(), function (Form $form) {
            $options =[
                1=>'入库',
                2=>'出库'
            ];
            $form->display('id');
            $form->text('inventory_id');
            //$form >radio( Radio::make($name,$options)->check(1));
            $form->radio('往来类型')
            ->when(1,function (Form $form){
                $form->text('inbound_order')->default('IB'.date('Ymd'));
            })->when(2,function(Form $form){
                $form->text('inbound_order')->default('OB'.date('Ymd'));
            })
            ->options($options)->default(1);
            $form->ignore('往来类型');
            $form->text('quantity_received');
            $form->text('acceptance_at')->value(date("Ymd"));
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
