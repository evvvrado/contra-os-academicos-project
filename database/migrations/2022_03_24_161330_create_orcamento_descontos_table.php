<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoDescontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_descontos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orcamento_id");
            $table->double("valor");

            // 0 => Valor
            // 1 => Porcentagem
            $table->tinyInteger("tipo");

            // 0 => Produtos
            // 1 => Serviços Inclusos
            // 2 => Serviços Adicionais
            // 3 => Total
            $table->tinyInteger("alvo");
            $table->timestamps();
            $table->foreign('orcamento_id')->references('id')->on('orcamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamento_descontos');
    }
}
