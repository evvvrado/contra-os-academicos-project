<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoProdutosIngredienteMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_produtos_ingrediente_marcas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marca_id");
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->unsignedBigInteger("ingrediente_id");
            $table->foreign('ingrediente_id')->references('id')->on('orcamento_produtos_ingredientes')->onDelete('cascade');
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
        Schema::dropIfExists('orcamento_produtos_ingrediente_marcas');
    }
}
