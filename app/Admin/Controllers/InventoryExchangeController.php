<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\InventoryExchange;
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
            $form->text('inventory_id');
            $form->number('quantity_received')->width(8);
            $form->datetime('acceptance_at')->width(5);
            
            /*
            $form->submitted(function (Form $form){
                return $form->response()->error("哦唷,出错咯~");
            });
            */
        });
    }
}
