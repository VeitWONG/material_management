<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Claim;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ClaimController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Claim(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('inventory_exchanges_id');
            $grid->column('claim_orders');
            $grid->column('applicant');
            $grid->column('quantity');
            $grid->column('request_at');
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
        return Show::make($id, new Claim(), function (Show $show) {
            $show->field('id');
            $show->field('inventory_exchanges_id');
            $show->field('claim_orders');
            $show->field('applicant');
            $show->field('quantity');
            $show->field('request_at');
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
        return Form::make(new Claim(), function (Form $form) {
            $form->display('id');
            $form->text('inventory_exchanges_id');
            $form->text('claim_orders');
            $form->text('applicant');
            $form->text('quantity');
            $form->text('request_at');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
