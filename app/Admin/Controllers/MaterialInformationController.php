<?php

namespace App\Admin\Controllers;

use App\Admin\Renderable\inventoryTable;
use App\Admin\Repositories\MaterialInformation;
use App\Admin\Repositories\SupplierInformation;
use Dcat\Admin\Form;
use Dcat\Admin\Form\Field\Display;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show\Row;

class MaterialInformationController extends AdminController
{
    protected $options = [1=>' '];

    /**
     * 创建表格
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new MaterialInformation(['supplierinformation']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('m_byword');
            $grid->column('m_categories');
            $grid->column('m_name');
            $grid->column('m_brand');
            $grid->column('m_type');
            $grid->column('m_unit');
            $grid->column('m_description');
            $grid->column('m_price');
            //$grid->column('created_at');
            //$grid->column('updated_at')->sortable();
            
            //关联供应商数据
            $grid->supplierinformation('供应商名称')->pluck('s_name')->implode('');

            //关联库存
            $grid->column('库存')->display('查看')->expand(function () {
                // 标题
                
                return inventoryTable::make()->payload(['id' => $this->id]);
            });

            $grid->column('created_at','录入时间');
            $grid->column('updated_at','最近更新时间');
            
            //设置筛选器
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id')->width(4);
                $filter->equal('m_byword')->width(4);
                $filter->equal('m_categories')->width(4);
                $filter->equal('m_name')->width(4);
                $filter->equal('m_brand')->width(4);
                $filter->equal('m_type')->width(4);
                $filter->panel();
            
            });

            //数据表格设置
            $grid->showColumnSelector(); //设置列选择器
            $grid->addTableClass('table-text-center'); //列居中
            $grid->export(); //启用导出功能
            $grid->export()->xlsx(); //设置导出格式
            $grid->export()->filename('资材信息表'); //设置导出文件名
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
        return Show::make($id, new MaterialInformation(['supplierinformation']), function (Show $show) {
            $show->field('id');
            $show->field('m_byword');
            $show->field('m_categories');
            $show->field('m_name');
            $show->field('m_brand');
            $show->field('m_type');
            $show->field('m_unit');
            $show->field('m_description');
            $show->field('m_price');

            //关联供应商表数据
            $show->relation('供应商列表',function ($model){
                $grid = new Grid(new SupplierInformation);
                $grid->model()->join('supplier_material',function($join) use ($model){
                    $join->on('supplier_material.supplier_id','id')
                    ->where('material_id','=',$model->id);
                });
                $grid->setresource('supplier'); //设置路由,参数为路由文件中所指定的路径
                $grid->column('s_byword','供应商代号')->width('25%');
                $grid->column('s_name','供应商名称')->width('25%');
                $grid->column('s_contact','联系人')->width('25%');
                $grid->column('s_phone','电话')->width('25%');
                $grid->addTableClass('table-text-center'); //显示居中
                $grid->disableActions(); //关闭动作按钮
                $grid->disableCreateButton(); //关闭创建按钮
                $grid->disableRefreshButton(); //关闭刷新按钮
                $grid->disableRowSelector(); //关闭行选择器
                return $grid;
            });

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
        return Form::make(new MaterialInformation(['SupplierInformation']), function (Form $form) {
            //表单提交确定提示
            $form->confirm("确认提交?");

            //设定表单提交的动作路由，先判断是否是新建动作，如果是则指定处理路由
            if ($form->isCreating()){
                $form->action('material');
            }

            //构建表单
            $form->column(6, function (Form $form) {
                $form->text('m_byword');
                $form->text('m_categories');
                $form->text('m_name');
                $form->text('m_brand');
                $form->text('m_type');
                
            });

            $form->column(6, function (Form $form) {
                
                $form->text('m_unit');
                $form->decimal('m_price');
                $form->textarea('m_description');
            });
        });

        
        
    }
}
