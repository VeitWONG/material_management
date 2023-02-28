<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryExchangeTable;
use App\Admin\Renderable\materialTable;
use App\Admin\Renderable\materialTable2;
use App\Admin\Repositories\Subscription;
use App\Models\InventoryExchange;
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
            $grid->column('id')->sortable();
            $grid->column('material_id');
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
        return Show::make($id, new Subscription(), function (Show $show) {
            $show->field('id');
            $show->field('material_id');
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
     * 创建新增表单.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Subscription(), function (Form $form) {
            $form->confirm('您确定要提交表单吗？');
            $form->display('id');
            $form->selectTable('material_id','申购资材')
            ->title('资材信息表')
            ->from(materialTable2::make()->payload(['id' => '']))
            ->model(MaterialInformation::class,'id','m_type');

            $form->text('requisition_orders')->value('SG'.date('Ymd'));
            $form->text('applicant')->default(Admin::user()->username);
            $form->datetime('request_time');
            $form->number('quantity')->default(1);
            $form->text('m_byword');
            $form->text('order_status');

            $form->display('created_at');
            $form->display('updated_at');
            
        });
    }
}
