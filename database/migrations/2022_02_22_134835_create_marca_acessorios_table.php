<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaAcessoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_acessorios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marca_id");
            $table->unsignedBigInteger("acessorio_id");
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('acessorio_id')->references('id')->on('acessorios')->onDelete('cascade');
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
        Schema::dropIfExists('marca_acessorios');
    }
}
