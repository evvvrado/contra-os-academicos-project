<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitaIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receita_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("receita_id");
            $table->unsignedBigInteger("ingrediente_id");
            $table->double("quantidade")->default(0);
            $table->timestamps();
            $table->foreign('receita_id')->references('id')->on('receitas')->onDelete('cascade');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receita_ingredientes');
    }
}
