<?php
 
namespace App\Admin\Forms;
 
use App\Models\Subscription;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;
use Dcat\Admin\Contracts\LazyRenderable;
class Batchspform extends Form implements LazyRenderable
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    use LazyWidget;
    public function handle(array $input)
    {
        
        //接收弹窗提交过来的数据，进行处理
       
        $id = explode(',', $input['id'] ?? null); //处理提交过来的批量选择的行的id
      
        if (!$id) {
            return $this->response()->error('参数错误');
        }
 
        $opinion = $input['opinion'] ?? null;  //form提交过来的审批意见
        $flag = $input['flag'] ?? null;    //form提交过来的通过还是退回
         
        //写你的处理逻辑
        foreach ($id as $key) {
            //Subscription::updated(['order_status'=>$flag]);
            Subscription::where('id',$key)->updated(['order_status'=>$flag]);
        }

        return $this->response()->success('审核通过')->refresh(); 
       
      
    }
 
    /**
     * Build a form here.
     */
    public function form()
    {
         //弹窗界面
        $this->textarea('opinion','审批意见');
        $this->radio('flag','审批')->options([2=>'同意',3=>'退回'])->required();
        //批量选择的行的值怎么传递看下面
        $this->hidden('id')->attribute('id', 'batchsp-id'); //批量选择的行的id通过隐藏元素 提交时一并传递过去
       
    }
 
}