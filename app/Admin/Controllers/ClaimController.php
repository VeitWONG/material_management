<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryExchangeTable;
use App\Admin\Repositories\Claim;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ClaimController extends AdminController
{
    /**
     * 创建表格
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
     * 创建详情表单
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
     * 创建新增表单
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Claim(), function (Form $form) {
            $form->confirm('您确定要提交表单吗？');
            $form->display('id');
            $form->selectTable('inventory_exchanges_id','库存往来单号')
            ->title('库存往来列表')
            ->from(inventoryExchangeTable::make()->payload(['id' => '']))//inventory_exchange,id传递空值，以显示所有往来账单
            ->model(InventoryExchange::class,'id','inbound_order');

            $form->text('claim_orders');
            $form->text('applicant');
            $form->text('quantity');
            $form->datetime('request_at');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
