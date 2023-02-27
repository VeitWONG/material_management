<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_byword')->default('');
            $table->string('m_categories')->default('');
            $table->string('m_name')->default('');
            $table->string('m_brand')->default('');
            $table->string('m_type')->default('');
            $table->string('m_unit')->default('');
            $table->string('m_description')->nullable();
            $table->float('m_price');
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
        Schema::dropIfExists('material_information');
    }
}
