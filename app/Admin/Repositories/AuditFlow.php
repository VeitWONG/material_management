<?php

namespace App\Admin\Repositories;

use App\Models\AuditFlow as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AuditFlow extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
