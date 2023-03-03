<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryexchangeTable;
use App\Admin\Renderable\materialTable2;
use App\Admin\Repositories\Inventory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\MaterialInformation;

class InventoryController extends AdminController
{
    /**
     * 创建表格.
     *
     * @return Grid
     */
    
    protected function grid()
    {
        return Grid::make(new Inventory(), function (Grid $grid) {
            $grid->setResource('inventory');
            
            $grid->model()->with(['inventoryexchange']);
            $grid->model()->with(['materialinformation']);
            $grid->column('id')->sortable();
            
            $grid->column('materialinformation.m_name','资材名称');
            $grid->column('materialinformation.m_type','资材型号');

            $grid->column('quantity');
            $grid->column('inventory_batches');
            $grid->column('库存往来')->display('查看')->modal(function (Grid\Displayers\Modal $modal) {
                // 标题
                $modal->title('资材列表');
                // 自定义图标
                $modal->icon('feather icon-edit');
                // 传递当前行字段值
                return inventoryExchangeTable::make()->payload(['id' => $this->id]);
            });
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
            
            $grid->enableDialogCreate();
            $grid->addTableClass('table-text-center'); //列居中
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
        return Show::make($id, new Inventory(), function (Show $show) {
            $show->field('id');
            $show->field('masterial.id','资材名称');
            $show->field('quantity');
            $show->field('inventory_batches');
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
        return Form::make(new Inventory(), function (Form $form) {
            $form->display('id');
            $form->selectTable('material_information_id','资材信息')
            ->title('资材信息表')
            ->from(materialTable2::make())
            ->model(MaterialInformation::class,'id','m_type');
            
            $form->text('quantity');
            $form->text('inventory_batches')->value('KC'.date('Ymd').str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT));
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
