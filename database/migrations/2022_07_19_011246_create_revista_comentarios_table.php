<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista_comentarios', function (Blueprint $table) {
            $table->id();
            $table->string("conteudo", 255);
            $table->unsignedBigInteger("revista_id");
            $table->foreign('revista_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->unsignedBigInteger("usuario_site_id");
            $table->foreign('usuario_site_id')->references('id')->on('usuario_sites')->onDelete('cascade');
            $table->integer("status")->default(1);
            $table->integer("curtidas")->default(0);
            $table->integer("descurtidas")->default(0);
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
        Schema::dropIfExists('revista_comentarios');
    }
}
