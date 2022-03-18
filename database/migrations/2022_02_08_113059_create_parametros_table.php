<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->double("valor_km_rodado")->default(10);
            $table->double("quantidade_mais_visitados")->default(10);
            $table->integer("garcons_convidados")->default(1);
            $table->integer("garcons_numero")->default(1);
            $table->integer("drinks_convidados")->default(1);
            $table->integer("drinks_numero")->default(1);
            $table->integer("tipos_drinks_convidados")->default(1);
            $table->integer("tipos_drinks_numero")->default(1);
            $table->timestamps();
        });

        DB::table('parametros')->insert([
            'valor_km_rodado' => 10,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
