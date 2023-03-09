<?php

namespace App\Admin\Actions\Show;

use App\Admin\Forms\Batchspform;
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
	protected $title = "<i class='fa fa-edit'></i>&nbsp;测试"; //按钮标题
    protected $modalId = 'show-current-user'; 

    protected $method = 'POST';//与服务器交互的请求方法

    /**
     * 处理请求.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(){
        return $this->response()->success('TEST');
    }
    
    
    

 

    /**
     * 跳转使用
     * @return string|void
     */
    protected function href()
    {
        //return admin_url('/material');
    }

    /**
     * 确认弹窗
	 * @return string|array|void
	 */
	public function confirm()
	{
		return ['确定?'];
	}
    

    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    

    

}
