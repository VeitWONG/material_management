<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AuditFlowDetail extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'audit_flow_detail';
    
    public function AuditFlow(){
        return $this->belongsTo(AuditFlow::class);
    }
}
