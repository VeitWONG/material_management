<?php

namespace App\Admin\Repositories;

use App\Models\Claim as Model;
use Dcat\Admin\Repositories\EloquentRepository;


class Claim extends EloquentRepository
{
    /**
     * 关联模型名
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    /**
     * 
     * @param \Dcat\Admin\Form $form
     * @return void
     */
    public function update(\Dcat\Admin\Form $form)
    {
        $attributes = $form->updates();
        
        


        return 'test';
    }
}
