<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ReceitasController extends Controller
{
    //
    public function consultar(Produto $produto){
        return view("painel.produtos.receitas", ["produto" => $produto]);
    }
}
