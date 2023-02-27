<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\materialTable;
use App\Admin\Repositories\SupplierInformation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SupplierInformationController extends AdminController
{
    /**
     * 创建表格
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new SupplierInformation(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->setResource('supplier');
            $grid->column('s_byword');
            $grid->column('s_name');
            $grid->column('s_contact');
            $grid->column('s_phone');
            

            $grid->column('供应资材列表')->display('查看')->modal(function (Grid\Displayers\Modal $modal) {
                // 标题
                $modal->title('资材列表');
                // 自定义图标
                $modal->icon('feather icon-edit');
                // 传递当前行字段值
                return materialTable::make()->payload(['id' => $this->id]);
            });
            $grid->column('created_at','录制时间');
            $grid->column('updated_at','最近更新时间')->sortable();
            $grid->addTableClass('table-text-center');
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
                $filter->equal('s_byword')->width(4);
                $filter->equal('s_name')->width(4);
                $filter->equal('s_contact')->width(4);
                $filter->panel();
        
            });
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
        return Show::make($id, new SupplierInformation(), function (Show $show) {
            $show->field('id');
            $show->field('s_byword');
            $show->field('s_name');
            $show->field('s_contact');
            $show->field('s_phone');
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
        return Form::make(new SupplierInformation(), function (Form $form) {
            
            $form->text('s_byword');
            $form->text('s_name');
            $form->text('s_contact');
            $form->text('s_phone');
        
        });
    }
}
