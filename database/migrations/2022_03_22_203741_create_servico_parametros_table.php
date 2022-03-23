<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_parametros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("servico_id");
            $table->integer("quantidade_minima_pessoas")->default(1);
            $table->integer("quantidade_maxima_pessoas")->default(1);
            $table->integer("quantidade_minima_servico")->default(1);
            $table->integer("quantidade_maxima_servico")->default(1);
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
        Schema::dropIfExists('servico_parametros');
    }
}
