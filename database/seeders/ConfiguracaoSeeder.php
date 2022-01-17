<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ConfiguracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configuracaos')->insert([
            'rua' => 'Rua Gomes de Carvalho',
            'numero' => '1327',
            'complemento' => 'C.J. 21',
            'bairro' => 'Vila Olímpia',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'email' => 'contato@abs-brasil.com',
            'facebook' => 'https://www.facebook.com/ABS-Brasil-105852698310241',
            'instagram' => 'https://www.instagram.com/abs.brasil/',
            'youtube' => 'https://www.youtube.com/channel/UCjm6Wo9sSzg3L88oFicZvYg'
        ]);
    }
}
