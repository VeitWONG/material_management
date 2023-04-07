<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_flow', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FlowNo')->default('');
            $table->string('Title')->default('');
            $table->string('BusType')->default('');
            $table->string('AddUserNo')->default('');
            $table->integer('ApproStatus')->comment('1.待审,2.通过.3.驳回,4.撤销');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_flow');
    }
}
