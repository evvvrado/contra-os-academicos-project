<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            'nome' => 'Admin',
            'telefone' => '35988461456',
            'email' => 'admin@gmail.com',
            'senha' => Hash::make('12345'),
            'usuario' => 'admin',
            'acesso' => 0
        ]);
    }
}
