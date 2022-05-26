<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 200);
            $table->text("conteudo");
            $table->string("banner", 255)->nullable();
            $table->unsignedBigInteger("usuario_id");
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('setors')->onDelete('cascade');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('setors')->onDelete('cascade');
            $table->text("visitas");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revistas');
    }
}
