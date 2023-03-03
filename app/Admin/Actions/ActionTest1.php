<?php

namespace App\Admin\Actions;

use Dcat\Admin\Actions\Action;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ActionTest1 extends Action
{
    /**
     * 按钮标题。
     * @return string
     */
	protected $title = '动作按钮测试';

    /**
     * 处理动作的请求接口，可删除。
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        // dump($this->getKey());

        return $this->response()->success('Processed successfully.')->redirect('/');
    }

    /**
     * 确认弹窗信息，可删除
     * @return string|array|void
     */
    public function confirm()
    {
        // return ['Confirm?', 'contents'];
    }

    /**
     * 动作的权限判断，可删除
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * 此方法用于设置动作发起请求时附带的参数，可删除
     * @return array
     */
    protected function parameters()
    {
        return [];
    }

    //处理响应的html字符串，附加到弹窗节点中
    protected function handleHtmlResponse()
    {

    }

    //设置按钮样式
    protected $style = 'danger';

    //设置按钮图标和文字
    public function html()
    {
        return "<a class='grid-row-action btn btn-{$this->style}'><i class='fa fa-edit'></i>{$this->title()}</a>";
    }

    /*设置按钮标题
    public function title()
    {
        return '自定义动作';
    }
    */
}
