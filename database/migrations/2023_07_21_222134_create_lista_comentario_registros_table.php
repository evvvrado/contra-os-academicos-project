<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaComentarioRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_comentario_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("lista_comentario_id");
            $table->foreign('lista_comentario_id')->references('id')->on('lista_comentarios')->onDelete('cascade');
            $table->unsignedBigInteger('lista_id');
            $table->foreign('lista_id')->references('id')->on('listas')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_site_id');
            $table->foreign('usuario_site_id')->references('id')->on('usuario_sites')->onDelete('cascade');
            $table->string('acao');
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
        Schema::dropIfExists('lista_comentario_registros');
    }
}
