<?php

namespace App\Admin\Repositories;

use App\Models\Subscription as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Subscription extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
