<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cliente_id")->nullable();
            $table->string("tipo")->nullable();
            $table->string("cep")->nullable();
            $table->date("data")->nullable();
            $table->tinyInteger("duracao")->nullable();
            $table->tinyInteger("outras_bebidas")->nullable();
            $table->string("qtd_pessoas")->nullable();
            $table->string("rua", 100)->nullable();
            $table->string("cidade", 50)->nullable();
            $table->string("estado", 2)->nullable();
            $table->string("pais", 30)->nullable();
            $table->boolean("aberto")->default(true);
            $table->double("valor", 10, 2)->nullable()->default(null);
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('orcamentos');
    }
}
