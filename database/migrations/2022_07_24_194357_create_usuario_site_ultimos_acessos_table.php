<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioSiteUltimosAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_site_ultimos_acessos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("blog_id")->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->unsignedBigInteger("revista_id")->nullable();
            $table->foreign('revista_id')->references('id')->on('revistas')->onDelete('cascade');
            $table->unsignedBigInteger("lista_id")->nullable();
            $table->foreign('lista_id')->references('id')->on('listas')->onDelete('cascade');
            $table->unsignedBigInteger("usuario_site_id");
            $table->foreign('usuario_site_id')->references('id')->on('usuario_sites')->onDelete('cascade');
            $table->string('tipo');
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
        Schema::dropIfExists('usuario_site_ultimos_acessos');
    }
}
