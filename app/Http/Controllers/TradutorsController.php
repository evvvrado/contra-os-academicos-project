<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tradutor;
use Illuminate\Support\Facades\Storage;

class TradutorsController extends Controller
{
    public function consultar(){
        $tradutores = Tradutor::all();
        return view("painel.tradutores.consultar", ["tradutores" => $tradutores]);
    }

    public function cadastrar(Request $request){
        $tradutor = new Tradutor;
        $tradutor->nome = $request->nome;
        $tradutor->resumo = $request->resumo;
        $tradutor->save();

        if($request->file("foto")){
            Tradutor::whereId($tradutor->id)
            ->update(['foto' => 'admin/imagens/tradutores/'.$tradutor->id.'/'.$request->file('foto')->getClientOriginalName()]);

            $request->file("foto")->move(public_path('/admin/imagens/tradutores/'.$tradutor->id."/"), $request->file('foto')->getClientOriginalName());
        }

        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.tradutores");
    }

    public function salvar(Request $request, Tradutor $tradutor){
        $tradutor->nome = $request->nome;
        $tradutor->resumo = $request->resumo;
        $tradutor->save();

        if($request->file("foto")){
            Storage::delete($tradutor->foto);

            Tradutor::whereId($tradutor->id)
            ->update(['foto' => 'admin/imagens/tradutores/'.$tradutor->id.'/'.$request->file('foto')->getClientOriginalName()]);

            $request->file("foto")->move(public_path('/admin/imagens/tradutores/'.$tradutor->id."/"), $request->file('foto')->getClientOriginalName());
        }

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.tradutores');
    }
}
