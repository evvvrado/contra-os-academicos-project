<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->text("descricao");
            $table->string("teor_alcoolico");
            $table->string("calorias");
            $table->string("nota");
            $table->string("harmonizacao");
            $table->string("lancamento");
            $table->string("mais_visitados")->nullable();
            $table->text("historia");
            $table->string("recomendados")->nullable();
            $table->double("valor")->nullable();
            $table->string("guarnicao")->nullable();
            $table->string("imagem_1")->nullable();
            $table->string("imagem_2")->nullable();
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
        Schema::dropIfExists('produtos');
    }
}
