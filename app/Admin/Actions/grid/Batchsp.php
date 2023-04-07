<?php

namespace App\Admin\Actions\Grid;


use Dcat\Admin\Actions\Response;
use Dcat\Admin\Grid\BatchAction;
use Illuminate\Http\Request;
use Dcat\Admin\Widgets\Modal;

use App\Admin\Forms\Batchspform as Batchspform;

class Batchsp extends BatchAction{
    /**
     * @return string
     */
	protected $title = '审批';
 
    /**
     * Handle the action request.
     *
     * @param Request $request
     *
     * @return Response
     */
   
public function render()
    {
        // 实例化表单类并传递自定义参数
        $form = Batchspform::make();
 
        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body($form)
            ->onLoad($this->getModalScript())
            ->button($this->title);
    }
 
 
  protected function getModalScript()
    {
        // 弹窗显示后往隐藏的id表单中写入批量选中的行ID
        return <<<JS
// 获取选中的ID数组
var key = {$this->getSelectedKeysScript()}
//batchsp-id 与 之前弹窗隐藏的绑定的id一致
$('#batchsp-id').val(key);    
JS;
    }
}