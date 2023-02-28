<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'inventory';
    
    public function MaterialInformation()
    {
        return $this->belongsTo(MaterialInformation::class);
    }

    public function InventoryExchange()
    {
        return $this->hasMany(InventoryExchange::class);
    }
}