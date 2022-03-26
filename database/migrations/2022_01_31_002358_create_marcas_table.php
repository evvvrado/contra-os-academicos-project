<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ingrediente_id")->nullable();
            $table->unsignedBigInteger("acessorio_id")->nullable();
            $table->boolean("padrao")->default(true);
            $table->string("nome");
            $table->string("imagem")->nullable();
            $table->string("embalagem");
            $table->double("quantidade_embalagem");
            $table->double("valor_embalagem")->default(0);

            // 0 => Ingrediente
            // 1 => Acessório
            $table->tinyInteger("tipo")->default(0);
            $table->timestamps();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
            $table->foreign('acessorio_id')->references('id')->on('acessorios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
