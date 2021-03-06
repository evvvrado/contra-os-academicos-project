<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogVisusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_visus', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 200);
            $table->text("conteudo");
            $table->text("referencias")->nullable();
            $table->string("banner", 255)->nullable();
            $table->boolean("exclusivo");
            $table->integer("visitas")->default(0);
            $table->string("resumo", 255)->nullable();
            $table->unsignedBigInteger("usuario_id");
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete('cascade');
            $table->unsignedBigInteger('tradutor_id');
            $table->foreign('tradutor_id')->references('id')->on('tradutors')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();     
            $table->boolean("status")->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_visus');
    }
}
