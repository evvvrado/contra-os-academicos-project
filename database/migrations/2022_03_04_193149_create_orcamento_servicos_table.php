<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_servicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_id");
            $table->unsignedBigInteger("servico_id");
            $table->integer("qtd");
            $table->double("valor", 10, 2);
            $table->foreign('orcamento_id')->references('id')->on('orcamentos')->onDelete('cascade');
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_servicos');
    }
}
