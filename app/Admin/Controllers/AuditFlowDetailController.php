<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AuditFlowDetail;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AuditFlowDetailController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AuditFlowDetail(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('FlowNo');
            $grid->column('AuditUserNo');
            $grid->column('AuditRemark');
            $grid->column('AuditTime');
            $grid->column('AuditStatus');
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
        return Show::make($id, new AuditFlowDetail(), function (Show $show) {
            $show->field('id');
            $show->field('FlowNo');
            $show->field('AuditUserNo');
            $show->field('AuditRemark');
            $show->field('AuditTime');
            $show->field('AuditStatus');
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
        return Form::make(new AuditFlowDetail(), function (Form $form) {
            $form->display('id');
            $form->text('FlowNo');
            $form->text('AuditUserNo');
            $form->text('AuditRemark');
            $form->text('AuditTime');
            $form->text('AuditStatus');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
