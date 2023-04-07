<?php

namespace App\Admin\Repositories;

use App\Models\AuditFlowDetail as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AuditFlowDetail extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
