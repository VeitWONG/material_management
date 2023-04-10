<?php

namespace App\Admin\Actions\Show;

use App\Admin\Forms\Batchspform;
use App\Admin\Forms\Detailform;
use App\Admin\Repositories\Claim;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Form;
use Dcat\Admin\Show;
use Dcat\Admin\Show\AbstractTool;
use Dcat\Admin\Traits\HasPermissions;
use Dcat\Admin\Widgets\Modal;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ShowActionTest extends AbstractTool
{
    /**
     * @return string
     */
	protected $title = "<span class='btn btn-sm btn-primary'><i class='fa fa-edit'></i>&nbsp;审批</span>&nbsp;"; //按钮标题
    protected $modalId = 'show-current-user'; 

    protected $method = 'POST';//与服务器交互的请求方法
    

    /**
     * 确认弹窗
	 * @return string|array|void
	 */
	

    public function render()
    {
        // 实例化表单类并传递自定义参数
        $form = Detailform::make();
 
        return Modal::make()
            ->lg()
            ->title('审批')
            ->body($form)
            ->onLoad($this->getModalScript())
            ->button($this->title);
    }

    protected function getModalScript()
    {
        // 弹窗显示后往隐藏的id表单中写入本行数据ID
        return <<<JS
        // 获取选中的ID数组
        var key = {$this->getKey()}
        //id 与 之前弹窗隐藏的绑定的id一致
        $('#id').val(key);
        JS;
    }
}


