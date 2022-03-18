<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutoIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_produto_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_produto_id")->nullable();
            $table->unsignedBigInteger("ingrediente_id")->nullable();
            $table->unsignedBigInteger("marca_id");
            $table->foreign('orcamento_produto_id')->references('id')->on('orcamento_produtos')->onDelete('cascade');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_produto_ingredientes');
    }
}
