<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("email");
            $table->string("senha")->nullable();
            $table->string("telefone");
            $table->string("tipo")->nullable();
            $table->string("cep")->nullable();
            $table->date("data")->nullable();
            $table->tinyInteger("duracao")->nullable();
            $table->string("outras_bebidas")->nullable();
            $table->string("qtd_pessoas")->nullable();
            $table->string("rua", 100)->nullable();
            $table->string("cidade", 50)->nullable();
            $table->string("estado", 2)->nullable();
            $table->string("pais", 30)->nullable();
            $table->string("cpf", 15)->unique()->nullable();
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
        Schema::dropIfExists('leads');
    }
}
