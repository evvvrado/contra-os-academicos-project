<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistaComentarioRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista_comentario_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("revista_comentario_id");
            $table->foreign('revista_comentario_id')->references('id')->on('revista_comentarios')->onDelete('cascade');
            $table->unsignedBigInteger('revista_id');
            $table->foreign('revista_id')->references('id')->on('revistas')->onDelete('cascade');
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
        Schema::dropIfExists('revista_comentario_registros');
    }
}
