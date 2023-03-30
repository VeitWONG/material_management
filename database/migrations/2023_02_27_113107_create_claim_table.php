<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_information_id')->default('');
            $table->string('inventory_exchanges_id')->default('');
            $table->string('claim_orders')->default('');
            $table->string('applicant')->default('');
            $table->integer('quantity');
            $table->integer('order_status');
            $table->timestamp('request_at');
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
        Schema::dropIfExists('claim');
    }
}
