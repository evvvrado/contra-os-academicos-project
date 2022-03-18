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
            $table->string("nome", 100);
            $table->text("descricao");
            $table->double("teor_alcoolico", 5, 2);
            $table->double("calorias");
            $table->tinyInteger("nota");
            $table->string("harmonizacao");
            $table->boolean("lancamento");
            $table->unsignedInteger("visitas")->nullable();
            $table->text("historia");
            $table->boolean("recomendado")->nullable();
            $table->string("guarnicao")->nullable();
            $table->string("imagem_preview")->nullable();
            $table->string("imagem_detalhes")->nullable();
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
