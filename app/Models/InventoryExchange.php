<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class InventoryExchange extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'inventory_exchanges';

    public function Inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
    
}
