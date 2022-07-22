<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_comentarios', function (Blueprint $table) {
            $table->id();
            $table->string("conteudo", 255);
            $table->unsignedBigInteger("lista_id");
            $table->foreign('lista_id')->references('id')->on('listas')->onDelete('cascade');
            $table->unsignedBigInteger("usuario_site_id");
            $table->foreign('usuario_site_id')->references('id')->on('usuario_sites')->onDelete('cascade');
            $table->integer("status")->default(1);
            $table->integer("curtidas")->default(0);
            $table->integer("descurtidas")->default(0);
            $table->integer("denuncias")->default(0);
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
        Schema::dropIfExists('lista_comentarios');
    }
}
