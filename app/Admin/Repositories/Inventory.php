<?php

namespace App\Admin\Repositories;

use App\Models\Inventory as Model;
use Dcat\Admin\Grid;
use Dcat\Admin\Repositories\EloquentRepository;

class Inventory extends EloquentRepository
{
    /**
     * 模型名.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
    
}
