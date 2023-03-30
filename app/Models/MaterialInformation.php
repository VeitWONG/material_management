<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MaterialInformation extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'material_information';
    public function SupplierInformation(): BelongsToMany
    {
        $pivotTable = 'supplier_material'; // 中间表

        $relatedModel = SupplierInformation::class; // 关联模型类名
        return $this->belongsToMany($relatedModel,$pivotTable,'material_id','supplier_id');
    }

    public function Subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function Claim()
    {
        return $this->hasMany(Claim::class);
    }

    public function Inventory()
    {
        return $this->hasMany(Inventory::class);
    }
    
}
