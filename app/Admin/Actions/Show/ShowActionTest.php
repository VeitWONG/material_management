<?php

namespace App\Admin\Actions\Show;

use App\Admin\Repositories\Claim;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Form;
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
	protected $title = "<i class='fa fa-edit'></i>&nbsp;测试";
    protected $modalId = 'show-current-user';

    /**
     * 处理请求.
     *
     * @param Request $request
     *
     * @return Response
     */
    
    public function handle(Request $request)
    {
        $id = $this->getKey();
        $object = Claim::make();
       try {
        $object->getGridColumns()
        {
            
        }
        return $this->response()->success($id);
       }
       catch(\Exception){
        return $this->response()->error('发生错误');
       }
      
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
    /*
	public function confirm()
	{
		return ['确定?'];
	}
    */

    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * @return array
     */
    protected function parameters()
    {
        return [];
    }


}
