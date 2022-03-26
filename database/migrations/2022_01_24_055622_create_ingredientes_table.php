<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->unsignedBigInteger("ingrediente_categoria_id")->nullable();
            $table->tinyInteger("validade");
            $table->tinyInteger("unidade_medida");
            $table->timestamps();
            $table->foreign('ingrediente_categoria_id')->references('id')->on('ingrediente_categorias')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredientes');
    }
}
