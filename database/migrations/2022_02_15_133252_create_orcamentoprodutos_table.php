<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentoprodutos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_id");
            $table->unsignedBigInteger("produto_id");
            $table->double("total")->nullable();
            // $table->foreign('orcamento_id')->references('id')->on('carrinhos')->onDelete('cascade');
            // $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
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
        Schema::dropIfExists('orcamentoprodutos');
    }
}
