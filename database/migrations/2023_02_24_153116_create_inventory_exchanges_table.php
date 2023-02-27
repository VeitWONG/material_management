<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inventory_id')->default('');
            $table->string('inbound_order')->default('');
            $table->integer('quantity_received');
            $table->string('acceptance_at')->default('');
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
        Schema::dropIfExists('inventory_exchanges');
    }
}
