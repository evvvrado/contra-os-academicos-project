<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    public function consultar(){
        return view("painel.parametros.consultar");
    }
}
