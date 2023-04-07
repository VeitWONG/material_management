<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditFlowDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_flow_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FlowNo')->default('')->comment('关联主表');
            $table->string('AuditUserNo')->default('');
            $table->string('AuditRemark')->default('');
            $table->dateTimeTz('AuditTime');
            $table->string('AuditStatus')->default('')->comment('1.审核中,2.待我审批.3.通过,4.驳回');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_flow_detail');
    }
}
