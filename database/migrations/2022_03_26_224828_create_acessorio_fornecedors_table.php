<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessorioFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acessorio_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("acessorio_id");
            $table->unsignedBigInteger("fornecedor_id");
            $table->timestamps();
            $table->foreign('acessorio_id')->references('id')->on('acessorios')->onDelete('cascade');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acessorio_fornecedors');
    }
}
