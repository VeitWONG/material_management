<?php

namespace App\Admin\Repositories;

use App\Models\SupplierInformation as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SupplierInformation extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
