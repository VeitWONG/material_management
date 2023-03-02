<?php

namespace App\Admin\Repositories;

use App\Models\MaterialInformation as Model;
use Dcat\Admin\Grid;
use Dcat\Admin\Repositories\EloquentRepository;

class MaterialInformation extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
