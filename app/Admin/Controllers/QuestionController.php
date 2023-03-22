<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Question;
use App\Models\Question as Q;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Question(), function (Grid $grid) {
            /*
            $grid->column('title');
            $grid->column('updated_at')->sortable();
            $grid->quickSearch();
            $grid->disableBatchActions();
            $grid->disableRowSelector();
            $grid->disableRefreshButton();
            $grid->addTableClass(['table-text-center']);
            */
            
            
            $grid->rowSelector()->click();
            $grid->disableRefreshButton();
            $grid->setResource('question');
            $grid->view('questionTable');
            $grid->setActionClass(Grid\Displayers\Actions::class);
            $grid->disableEditButton();
            //$grid->disableViewButton();
            
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(6);
                $filter->like('title')->width(6);
                $filter->panel();
            });
            $grid->quickSearch('id','title')->placeholder('搜索...')->auto(false);
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
        return Show::make($id, new Question(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('detail');
            $show->field('resolvent');
            $show->imge()->image();
            $show->field('video')->video();
            $show->field('remark');
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
        return Form::make(new Question(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->textarea('detail');
            $form->textarea('resolvent');
            $form->multipleImage('imge')->sortable()->autoUpload()->removable(false)->threads(5)->storagePermission(777)->saving(function($v){
                return implode(',',$v);
            });
            $form->file('video')->removable(false)->chunkSize(81920)->autoUpload()->maxSize(102400)->storagePermission(777);
            $form->text('remark')->default('');
        });
    }
    
}