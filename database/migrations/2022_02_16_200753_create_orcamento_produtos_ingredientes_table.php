<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutosIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_produtos_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamentoproduto_id")->nullable();
            $table->unsignedBigInteger("ingrediente_id")->nullable();
            $table->foreign('orcamentoproduto_id')->references('id')->on('orcamentoprodutos')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_produtos_ingredientes');
    }
}
