<?php

namespace App\Admin\Actions\Modal;

use App\Admin\Actions\Form\memberForm;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid\Tools\AbstractTool;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class memberModal extends AbstractTool
{
    /**
     * @return string
     */
    protected $title = 'Title';

    public function render()
    {
        $id = "reset-pwd-{$this->getKey()}";

        // 模态窗
        $this->modal($id);

        return <<<HTML
<span class="grid-expand" data-toggle="modal" data-target="#{$id}">
   <a href="javascript:void(0)">
    
    <button class="btn btn-primary "><i class="fa  fa-file-excel-o"></i><span class='d-none d-sm-inline'>&nbsp;从EXCLE导入</span></button>
  </a>
</span>
HTML;
    }

    protected function modal($id)
    {
        $form = new memberForm();

        Admin::script('Dcat.onPjaxComplete(function () {
            $(".modal-backdrop").remove();
            $("body").removeClass("modal-open");
        }, true)');

        // 通过 Admin::html 方法设置模态窗HTML
        Admin::html(
            <<<HTML
<div class="modal fade" id="{$id}">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">导入数据</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        {$form->render()}
      </div>
    </div>
  </div>
</div>
HTML
        );
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

    /**
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}