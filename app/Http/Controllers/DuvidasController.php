<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Duvida;

class DuvidasController extends Controller
{
    //

    
    public function editar(Duvida $duvida){
        return view("painel.duvidas.editar", ['duvida' => $duvida]);
    }
    
    public function cadastrar(){
        return view("painel.duvidas.cadastrar");
    }

    public function consultar(Request $request){
        if($request->isMethod('get')){
            $duvidas = Duvida::all();
            return view("painel.duvidas.consultar", ['duvidas' => $duvidas]);
        }else{
            $filtros = [];
            if($request->pergunta != null){
                $filtros[] = ["pergunta", "like", "%" . $request->pergunta . "%"];
            }
            if($request->resposta != null){
                $filtros[] = ["resposta", "like", "%" . $request->resposta . "%"];
            }

            $duvidas = Duvida::where($filtros)->get();
            return view("painel.duvidas.consultar", ['duvidas' => $duvidas, "filtros" => $request->all()]);
        }
    }

    public function salvar(Request $request){
        if($request->duvida_id){
            $duvida = Duvida::find($request->duvida_id);
        }else{
            $duvida = new Duvida;
        }

        $duvida->pergunta = $request->pergunta;
        $duvida->resposta = $request->resposta;

        $duvida->save();

        toastr()->success("Dúvida salva com sucesso!");

        return redirect()->route("painel.duvidas");
    }

    public function deletar(Duvida $duvida){
        $duvida->delete();
        return redirect()->back();
    }

}
