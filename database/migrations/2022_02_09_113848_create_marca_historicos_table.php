<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_historicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marca_id");
            $table->double("valor", 8, 2);
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
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
        Schema::dropIfExists('marca_historicos');
    }
}
