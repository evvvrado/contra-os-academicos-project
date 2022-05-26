<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 200);
            $table->string("link", 255)->nullable();
            $table->text("resumo");
            $table->string("foto", 255)->nullable();
            $table->boolean("ativo")->default(true);
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
        Schema::dropIfExists('autors');
    }
}
