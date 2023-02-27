<?php

namespace App\Admin\Repositories;

use App\Models\Claim as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Claim extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
