<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AuditFlow;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AuditFlowController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AuditFlow(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('FlowNo');
            $grid->column('Title');
            $grid->column('BusType');
            $grid->column('AddUserNo');
            $grid->column('ApproStatus');
        
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
        return Show::make($id, new AuditFlow(), function (Show $show) {
            $show->field('id');
            $show->field('FlowNo');
            $show->field('Title');
            $show->field('BusType');
            $show->field('AddUserNo');
            $show->field('ApproStatus');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AuditFlow(), function (Form $form) {
            $form->display('id');
            $form->text('FlowNo');
            $form->text('Title');
            $form->text('BusType');
            $form->text('AddUserNo');
            $form->text('ApproStatus');
        });
    }
}
