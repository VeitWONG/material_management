<?php

namespace App\Admin\Renderable;

use App\Models\Inventory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class inventoryTable extends LazyRenderable
{
    public function grid():Grid
    {
       
        return Grid::make(new Inventory(), function (Grid $grid) {

            
            $grid->setResource('inventory');
            $grid->disableActions(); //关闭操作按钮
            $grid->column('id')->sortable();
            $grid->model()->where('material_id',"=",$this->payload['id'] ?? '');
            
          
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
            });

            $grid->enableDialogCreate();
            $grid->showBatchDelete();
            //$grid->setActionClass(Grid\Displayers\ContextMenuActions::class);
            
            
            $grid->addTableClass('table-text-center'); //显示居中
            $grid->paginate(15);
            $grid->showCreateButton();
            $grid->withBorder(true);

        });
    }

    


    
    protected function form(): Form
    {
        return Form::make(new Inventory(), function (Form $form) {
            $form->display('id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }

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