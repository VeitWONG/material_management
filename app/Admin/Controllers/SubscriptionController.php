<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Subscription;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SubscriptionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Subscription(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('inventory_exchanges_id');
            $grid->column('requisition_orders');
            $grid->column('applicant');
            $grid->column('request_time');
            $grid->column('quantity');
            $grid->column('m_byword');
            $grid->column('order_status');
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
        return Show::make($id, new Subscription(), function (Show $show) {
            $show->field('id');
            $show->field('inventory_exchanges_id');
            $show->field('requisition_orders');
            $show->field('applicant');
            $show->field('request_time');
            $show->field('quantity');
            $show->field('m_byword');
            $show->field('order_status');
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
        return Form::make(new Subscription(), function (Form $form) {
            $form->display('id');
            $form->text('inventory_exchanges_id');
            $form->text('requisition_orders');
            $form->text('applicant');
            $form->text('request_time');
            $form->text('quantity');
            $form->text('m_byword');
            $form->text('order_status');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
