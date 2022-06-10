<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuSite2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('usuario_sites', function (Blueprint $table) {
            //
            $table->smallInteger("pin")->nullable();
            $table->string('uf', 5)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('telefone', 30)->nullable(); 
            $table->string('sexo', 5)->nullable();
            $table->date('nascimento')->nullable();
            $table->string('escolaridade', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
