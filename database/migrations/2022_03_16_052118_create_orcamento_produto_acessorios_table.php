<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutoAcessoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_produto_acessorios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_produto_id")->nullable();
            $table->unsignedBigInteger("acessorio_id")->nullable();
            $table->unsignedBigInteger("marca_id");
            $table->foreign('orcamento_produto_id')->references('id')->on('orcamento_produtos')->onDelete('cascade');
            $table->foreign('acessorio_id')->references('id')->on('acessorios')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_produto_acessorios');
    }
}
