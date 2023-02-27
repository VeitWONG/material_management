<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SupplierInformation extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'supplier_information';
    
    public function MaterialInformation(): BelongsToMany
    {
        $pivotTable = 'supplier_material'; // 中间表

        $relatedModel = MaterialInformation::class; // 关联模型类名
        return $this->belongsToMany($relatedModel,$pivotTable,'supplier_id','material_id');
    }
    
}
