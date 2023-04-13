<?php

namespace App\Admin\Renderable;

use App\Admin\Repositories\MaterialInformation;
use App\Admin\Repositories\SupplierInformation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class supplierTable extends LazyRenderable
{
    //资材申购时使用此表格
    public function grid():Grid
    {
        //获取外部传递的参数
        
        
        return Grid::make(new SupplierInformation(), function (Grid $grid) {

            //$grid->supplierinformation('供应商ID')->pluck('id')->limit(true)->implode('');
            //$grid->supplierinformation;
            $grid->setResource('supplier');
            $grid->disableActions(); //关闭操作按钮
            $grid->column('id')->sortable();
            $grid->column('s_byword','供应商代号');
            $grid->column('s_name','供应商名称');
            $grid->column('s_contact','联系人');
            $grid->column('s_phone','联系电话');
            $grid->enableDialogCreate();
            $grid->showBatchDelete();
            //$grid->setActionClass(Grid\Displayers\ContextMenuActions::class);
            
            
            $grid->addTableClass('table-text-center'); //显示居中
            $grid->paginate(10);
            $grid->showCreateButton();
            $grid->withBorder(true);
        });
    }
}