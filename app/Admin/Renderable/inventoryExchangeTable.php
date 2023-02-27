<?php

namespace App\Admin\Renderable;

use App\Admin\Repositories\InventoryExchange;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class inventoryExchangeTable extends LazyRenderable
{
    public function grid():Grid
    {
        return Grid::make(new inventoryExchange(), function (Grid $grid) {

            $grid->setResource('inventoryexchange');
            
            $grid->disableActions(); //关闭操作按钮
            $grid->model()->where('inventory_id','=',$this->payload['id'] ?? '');
            $grid->column('inventory_id','库存ID');
            $grid->column('inbound_order','出入库单号');
            $grid->column('quantity_received','出入库总数');
            $grid->column('acceptance_at','出入库时间');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            //筛选器
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
            });
            $grid->enableDialogCreate();
            $grid->showBatchDelete();
            
            //表格设置
            $grid->addTableClass('table-text-center'); //显示居中
            $grid->paginate(15);
            $grid->showCreateButton();
            $grid->withBorder(true);

        });
    }
}