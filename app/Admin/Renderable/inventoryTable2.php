<?php

namespace App\Admin\Renderable;

use App\Models\Inventory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class inventoryTable2 extends LazyRenderable
{
    public function grid():Grid
    {
       
        return Grid::make(new Inventory(), function (Grid $grid) {

            //$grid->rowSelector()->style('danger');
            $grid->setResource('inventory');
            $grid->column('id')->sortable();
            $grid->column('quantity','库存量');
            $grid->column('inventory_batches','库存批次');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
            });

            $grid->enableDialogCreate();
            $grid->showBatchDelete();
            //$grid->setActionClass(Grid\Displayers\ContextMenuActions::class);
            
            //表格设置
            $grid->addTableClass('table-text-center'); //显示居中
            $grid->paginate(15);
            $grid->showCreateButton();
            $grid->withBorder(true);
            $grid->disableActions(); //关闭操作按钮
            $grid->disableBatchActions(); 
            $grid->disableCreateButton();
            $grid->disableFilterButton();
            $grid->disableRefreshButton();
            

        });
    }

    
}