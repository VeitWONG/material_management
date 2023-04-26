<?php

namespace Weiwait\DcatVue;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Form\NestedForm;
use Dcat\Admin\Http\JsonResponse;
use Illuminate\Support\Facades\Artisan;

class Setting extends Form
{
    public function form()
    {
        $this->disableResetButton();

        $this->tab('站点', function (\Dcat\Admin\Widgets\Form $form) {
            $form->switch('weiwait_auth.enable_captcha', DcatVueServiceProvider::trans('auth.enable_captcha'))
                ->default(true);
            $form->vImage('weiwait_auth.background', DcatVueServiceProvider::trans('auth.background'));
            $form->array('weiwait_auth.footer', DcatVueServiceProvider::trans('auth.footer'), function (NestedForm $form) {
                $form->text('name', DcatVueServiceProvider::trans('auth.footers.name'));
                $form->text('path', DcatVueServiceProvider::trans('auth.footers.path'));
            });
        });

        $this->tab('同步存储', function (\Dcat\Admin\Widgets\Form $form) {
            $options = [
                'public' => '本地(public)',
                'oss' => '阿里(oss)',
                'qiniu' => '七牛(qiniu)',
                'cos' => '腾讯(cos)',
            ];

            $form->select('sync.source', '来源')->options($options);
            $form->select('sync.target', '目标')->options($options);
            $form->number('sync.timeout', '超时/秒')->default(20);
            $form->number('sync.max', '大小/兆')->default(20)
                ->help('脚本无法长时间运行, 限制单位件大小');

            $sync = route('dcat.admin.weiwait.storage.sync');
            $form->button('开始同步')->on('click', <<<JS
                let form = $('#{$this->getElementId()}')
                let source = form.find("select[name='sync[source]']").val()
                let target = form.find("select[name='sync[target]']").val()
                let timeout = form.find("input[name='sync[timeout]']").val()
                let max = form.find("input[name='sync[max]']").val()

                if (!source || !target || source === target) {
                    !source && Dcat.warning('请选择同步来源');
                    !target && Dcat.warning('请选择同步目标');
                    source && source === target && Dcat.warning('不要进行一些特别聪明的行为');
                    return
                }

                this.style.visibility = 'hidden'
                Dcat.info('同步中，请不要执行其它操作')
                const synchronizing = () => {
                    $.ajax({
                        type: 'POST',
                        url: '$sync',
                        data: {
                            source,
                            target,
                            timeout,
                            max
                        },
                        success: res => {
                            console.log(res)
                            if (0 === ~~res) {
                                Dcat.info('同步仍在继续，请不要执行其它操作')
                                synchronizing()
                            }
                            if (1 === ~~res) {
                                Dcat.swal.success('同步成功')
                                this.style.visibility = 'visible'
                            }
                            if (2 === ~~res) {
                                Dcat.swal.error('请先确认两者配置')
                                this.style.visibility = 'visible'
                            }
                        },
                        error: e => {
                            console.log(e)
                            this.style.visibility = 'visible'
                        }
                    })
                }

                synchronizing()
            JS);
        });
    }

    public function handle(array $input): JsonResponse
    {
        admin_setting(['weiwait_auth' => $input['weiwait_auth']]);

        is_file(app()->getCachedConfigPath()) && Artisan::call('config:cache');

        return $this->response()->success('保存成功')->refresh();
    }

    public function default(): array
    {
        return [
            'weiwait_auth' => admin_setting_array('weiwait_auth'),
        ];
    }

    public function addAjaxScript()
    {
        parent::addAjaxScript(); // TODO: Change the autogenerated stub
    }
}