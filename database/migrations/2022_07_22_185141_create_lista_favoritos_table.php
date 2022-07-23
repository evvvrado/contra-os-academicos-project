<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_favoritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("lista_id");
            $table->foreign('lista_id')->references('id')->on('listas')->onDelete('cascade');
            $table->unsignedBigInteger("usuario_site_id");
            $table->foreign('usuario_site_id')->references('id')->on('usuario_sites')->onDelete('cascade');
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
        Schema::dropIfExists('lista_favoritos');
    }
}
