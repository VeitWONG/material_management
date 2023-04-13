<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Grid\Reast;
use App\Admin\Actions\Modal\memberModal;
use App\Admin\Repositories\Question;
use App\Models\Question as Q;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
            
            $grid->export()->filename('导出测试');
            $grid->export()->xlsx();
            $grid->export();
            
            $grid->rowSelector()->click();
            $grid->disableRefreshButton();
            $grid->setResource('question');
            $grid->view('questionTable');
            $grid->setActionClass(Grid\Displayers\Actions::class);
            $grid->disableEditButton();
            $grid->disableViewButton();
            
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(6);
                $filter->like('title')->width(6)->variables();
                $filter->equal('type')->radio([1 =>'网络',2 => '软件',3 => '硬件',4 =>'其他'])->width(12);
                $filter->panel();
                $filter->expand(false);
            });
            
           

            $grid->tools(function (Grid\Tools $tools){
                $tools->append(new memberModal());
            });
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
            $videoUrl = DB::table('question')->find($show->getkey());
            $show->field('id');
            $show->field('type')->using([1=>'网络',2=>'软件',3=>'硬件',4=>'其他']);
            $show->field('title');
            $show->field('detail');
            $show->field('resolvent');
            $show->imge()->image();
            if(stripos($videoUrl->video,'.MP4')||stripos($videoUrl->video,'.MPEG4')||stripos($videoUrl->video,'.WEBM')||stripos($videoUrl->video,'.OGG')){
                $show->field('video','视频')->video();
            }else{
                $show->field('video','文件')->file();
            }
            $show->field('remark');
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
            $form->radio('type')->options([1 =>'网络',2 => '软件',3 => '硬件',4 =>'其他'])->default(1);
            $form->text('title');
            $form->textarea('detail');
            $form->textarea('resolvent');
            $form->multipleImage('imge')->sortable()->autoUpload()->removable(false)->threads(5)->storagePermission(777)->saving(function($v){
                return implode(',',$v);
            });
            $form->file('video')->removable(false)->chunkSize(81920)->autoUpload()->maxSize(204800)->storagePermission(777);
            $form->text('remark')->default('');
        });
    }
}