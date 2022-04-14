<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acessorios', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->unsignedBigInteger("acessorio_categoria_id")->nullable();
            $table->tinyInteger("unidade_medida");
            $table->string("validade", 100);
            $table->timestamps();
            $table->foreign('acessorio_categoria_id')->references('id')->on('acessorio_categorias')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acessorios');
    }
}
