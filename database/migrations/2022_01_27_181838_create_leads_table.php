<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("email");
            $table->string("senha")->nullable();
            $table->string("telefone");
            $table->string("cep")->nullable();
            $table->string("rua", 100)->nullable();
            $table->string("cidade", 50)->nullable();
            $table->string("estado", 2)->nullable();
            $table->string("pais", 30)->nullable();
            $table->string("avatar", 255)->nullable();
            $table->string("cpf", 15)->unique()->nullable();
            $table->boolean("orcamento")->default(false);
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
        Schema::dropIfExists('leads');
    }
}
