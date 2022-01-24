<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Depoimento;
use Illuminate\Support\Facades\Storage;

class DepoimentoController extends Controller
{
    //

    
    public function editar(Depoimento $depoimento){
        return view("painel.depoimento.editar", ['depoimento' => $depoimento]);
    }
    
    public function cadastrar(){
        return view("painel.depoimento.cadastrar");
    }

    public function salvar(Request $request){
        if($request->depoimento_id){
            $depoimento = Depoimento::find($request->depoimento_id);
        }else{
            $depoimento = new Depoimento;
        }

        $depoimento->nome = $request->nome;
        $depoimento->depoimento = $request->depoimento;
        
        if($request->file("foto")){
            Storage::delete($depoimento->foto);
            $depoimento->foto = $request->file('foto')->store(
                'site/imagens/depoimentos/', 'local'
            );
        }

        $depoimento->save();

        toastr()->success("Depoimento salvo com sucesso!");

        return redirect()->route("painel.depoimento");
    }

    public function consultar(Request $request){
        if($request->isMethod('get')){
            $depoimentos = Depoimento::all();
            return view("painel.depoimento.consultar", ['depoimentos' => $depoimentos]);
        }else{
            $filtros = [];
            if($request->nome != null){
                $filtros[] = ["nome", "like", "%" . $request->nome . "%"];
            }
            if($request->depoimento != null){
                $filtros[] = ["depoimento", "like", "%" . $request->depoimento . "%"];
            }
            $depoimentos = Depoimento::where($filtros)->get();
            return view("painel.depoimento.consultar", ['depoimentos' => $depoimentos, "filtros" => $request->all()]);
        }
    }

    public function deletar(Depoimento $depoimento){
        Storage::delete($depoimento->foto);
        $depoimento->delete();
        toastr()->success("Depoimento removido com sucesso!");
        return redirect()->back();
    }

}
