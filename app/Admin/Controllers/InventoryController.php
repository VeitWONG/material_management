<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Inventory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class InventoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Inventory(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('material_id');
            $grid->column('quantity');
            $grid->column('inventory_batches');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Inventory(), function (Show $show) {
            $show->field('id');
            $show->field('material_id');
            $show->field('quantity');
            $show->field('inventory_batches');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Inventory(), function (Form $form) {
            $form->display('id');
            $form->text('material_id');
            $form->text('quantity');
            $form->text('inventory_batches');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
