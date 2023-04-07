<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AuditFlow extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'audit_flow';
    public $timestamps = false;

    public function AuditFlowDetail(){
        return $this->hasMany(AuditFlowDetail::class);
    } 

    public function Subscription(){
        return $this->hasone(Subscription::class);
    }
}
