<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FlowNo');
            $table->integer('material_information_id')->default('');
            $table->integer('inventory_exchanges_id')->default('');
            $table->string('requisition_orders')->default('');
            $table->string('applicant')->default('');
            $table->string('request_time')->default('');
            $table->integer('quantity')->default('');
            $table->string('m_byword')->default('');
            $table->integer('order_status');
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
        Schema::dropIfExists('subscription');
    }
}
