<?php

namespace App\Admin\Renderable;

use App\Admin\Repositories\MaterialInformation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class materialTable extends LazyRenderable
{
    public function grid():Grid
    {
        //获取外部传递的参数
        
        
        return Grid::make(new MaterialInformation(['supplierinformation']), function (Grid $grid) {

            //$grid->supplierinformation('供应商ID')->pluck('id')->limit(true)->implode('');
            //$grid->supplierinformation;

            

            
            //$grid->column('测试',$id);
            
            
           
            $grid->setResource('material');
            $grid->disableActions(); //关闭操作按钮
            $grid->column('id')->sortable();
            $grid->column('m_byword','代号');
            $grid->column('m_categories','类别');
            $grid->column('m_name','名称');
            $grid->column('m_brand','品牌');
            $grid->column('m_type','型号');
            $grid->column('m_unit','单位');
            $grid->column('m_description','说明');
            $grid->column('m_price','单价');
            // 关联资材表显示
            $grid->model()->join('supplier_material',function ($join) use ($grid){
                $join->on('supplier_material.material_id','id')->where('supplier_id','=',$this->payload['id'] ?? '');
            });
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
                $filter->equal('m_byword','代号')->width(4);
                $filter->equal('m_categories','类别')->width(4);
                $filter->equal('m_name','名称')->width(4);
                $filter->equal('m_brand','品牌')->width(4);
                $filter->equal('m_type','型号')->width(4);
            });
            $grid->supplierinformation('供应商名称')->pluck('s_name')->implode('');
            $grid->enableDialogCreate();
            $grid->showBatchDelete();
            //$grid->setActionClass(Grid\Displayers\ContextMenuActions::class);
            
            
            $grid->addTableClass('table-text-center'); //显示居中
            $grid->paginate(15);
            $grid->showCreateButton();
            $grid->withBorder(true);

        });
    }

    


    /*
    protected function form(): Form
    {
        return Form::make(new MaterialInformation(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('age');
            $form->text('gender');
            $form->text('calss');
            $form->text('A');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
    */

    /*
    protected function detail($id)
    {
        return Show::make($id, new Asset(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('age');
            $show->field('gender');
            $show->field('calss');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }
    */
}