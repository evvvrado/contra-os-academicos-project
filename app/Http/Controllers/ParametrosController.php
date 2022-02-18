<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametro;

class ParametrosController extends Controller
{
    public function consultar(){
        return view("painel.parametros.consultar");
    }

    public function salvar(Request $request){
        Parametro::where('id', 1)
        ->update(['valor_1' => $request->valor_km]);

        Parametro::where('id', 2)
        ->update(['valor_1' => $request->valor_1_param_2, 'valor_2' => $request->valor_2_param_2]);

        Parametro::where('id', 3)
        ->update(['valor_1' => $request->valor_1_param_3, 'valor_2' => $request->valor_2_param_3]);

        Parametro::where('id', 4)
        ->update(['valor_1' => $request->valor_1_param_4, 'valor_2' => $request->valor_2_param_4]);
        
        Parametro::where('id', 5)
        ->update(['valor_1' => $request->ingredientes]);

        return view("painel.parametros.consultar");
    }
}
