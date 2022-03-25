<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametro;

class ParametrosController extends Controller
{
    public function consultar(){
        $parametros = Parametro::first();
        return view("painel.parametros.consultar", ["parametros" => $parametros]);
    }

    public function salvar(Request $request){
        $parametros = Parametro::first();
        $parametros->valor_km_rodado = $request->valor_km_rodado;
        $parametros->quantidade_mais_visitados = $request->quantidade_mais_visitados;
        $parametros->garcons_convidados = $request->garcons_convidados;
        $parametros->garcons_numero = $request->garcons_numero;
        $parametros->drinks_convidados = $request->drinks_convidados;
        $parametros->drinks_numero = $request->drinks_numero;
        $parametros->tipos_drinks_convidados = $request->tipos_drinks_convidados;
        $parametros->tipos_drinks_numero = $request->tipos_drinks_numero;
        $parametros->categoria_filtro = $request->categoria_filtro;
        $parametros->save();
        toastr()->success("Parâmetros salvos com sucesso!");
        return redirect()->back();
    }
}
