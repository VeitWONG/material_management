<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('s_byword')->default('');
            $table->string('s_name')->default('');
            $table->string('s_contact')->default('');
            $table->string('s_phone')->default('');
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
        Schema::dropIfExists('supplier_information');
    }
}
