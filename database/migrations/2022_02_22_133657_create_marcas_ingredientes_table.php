<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marca_id");
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->unsignedBigInteger("ingrediente_id");
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
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
        Schema::dropIfExists('marcas_ingredientes');
    }
}
