<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutosAcessoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_produtos_acessorios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamentoproduto_id")->nullable();
            $table->unsignedBigInteger("acessorio_id")->nullable();
            $table->foreign('orcamentoproduto_id')->references('id')->on('orcamentoprodutos')->onDelete('cascade');
            $table->foreign('acessorio_id')->references('id')->on('acessorios')->onDelete('cascade');
            $table->unsignedBigInteger("marca_id");
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
        Schema::dropIfExists('orcamento_produtos_acessorios');
    }
}
