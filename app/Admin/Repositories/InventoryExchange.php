<?php

namespace App\Admin\Repositories;

use App\Models\InventoryExchange as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class InventoryExchange extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
