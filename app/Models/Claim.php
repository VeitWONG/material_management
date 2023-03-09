<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'claim';
    
    public function IventoryExchange(){
        return $this->belongsTo(InventoryExchange::class);
    }
}
