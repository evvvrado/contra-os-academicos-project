<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("email", 40);
            $table->string("usuario", 40);
            $table->string("senha", 255);
            $table->string("nome", 60);
            $table->string("foto", 100)->nullable();
            $table->unsignedBigInteger('setor_id')->nullable();
            $table->foreign('setor_id')->references('id')->on('setors')->onDelete('cascade');
            $table->boolean("ativo")->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        //
        DB::table('usuarios')->insert([
            'setor_id' => '1',
            'nome' => 'João Pedro',
            'email' => 'joao@gmail.com',
            'senha' => Hash::make('12345'),
            'usuario' => 'admin',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
