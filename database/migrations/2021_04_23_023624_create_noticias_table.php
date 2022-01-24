<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string("preview", 255)->nullable();
            $table->string("banner", 255)->nullable();
            $table->string('titulo', 100);
            $table->string('autor', 100)->nullable();
            $table->string('fonte')->nullable();
            $table->text('resumo')->nullable();
            $table->string('subtitulo', 255)->nullable();
            $table->string('slug', 100);
            $table->text('conteudo');
            $table->unsignedInteger('visualizacoes')->default(0);

            // 0 => Notícia
            // 1 => Artigo
            $table->tinyInteger('tipo')->default(0);
            
            $table->boolean("destaque")->default(false);
            $table->boolean("publicada")->default(false);
            $table->date("publicacao")->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('noticias');
    }
}
