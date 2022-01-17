<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $table->string("foto")->nullable();
            $table->string("nome", 50);
            $table->string("email", 50)->unique();
            $table->string("telefone", 15)->nullable();
            $table->string("usuario", 20)->unique();
            $table->string("senha", 255);
            $table->boolean("ativo")->default(true);
            $table->smallInteger("acesso");
            $table->timestamps();
        });

        DB::table('usuarios')->insert([
            'nome' => 'Admin',
            'telefone' => '35912345678',
            'email' => 'admin@gmail.com',
            'senha' => Hash::make('12345'),
            'usuario' => 'admin',
            'acesso' => 0
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
