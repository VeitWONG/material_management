<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
class Subscription extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'subscription';
    
    public function MaterialInformation()
    {
        return $this->belongsTo(MaterialInformation::class);
    }

    public function IventoryExchange(){
        return $this->belongsTo(InventoryExchange::class);
    }
    
}
