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
        Schema::create('orcamento_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_id");
            $table->unsignedBigInteger("produto_id");
            $table->unsignedBigInteger("receita_id");
            $table->integer("qtd")->nullable()->default(null);
            $table->double("valor", 10, 2)->nullable()->default(null);
            $table->foreign('orcamento_id')->references('id')->on('orcamentos')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('receita_id')->references('id')->on('receitas')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_produtos');
    }
}
