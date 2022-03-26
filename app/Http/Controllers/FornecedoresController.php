<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    //

    public function consultar(){
        $fornecedores = Fornecedor::all();
        return view("painel.fornecedores.consultar", ["fornecedores" => $fornecedores]);
    }
    
}
