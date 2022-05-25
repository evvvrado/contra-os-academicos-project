<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use Illuminate\Support\Facades\Storage;

class AutorsController extends Controller
{
    public function consultar(){
        $autores = Autor::all();
        return view("painel.autores.consultar", ["autores" => $autores]);
    }

    public function cadastro(){
        return view("painel.autores.cadastro");
    }

    public function cadastrar(Request $request){
        $autor = new Autor;
        $autor->nome = $request->nome;
        $autor->resumo = $request->resumo;
        $autor->save();

        if($request->file("foto")){
            Autor::whereId($autor->id)
            ->update(['foto' => 'admin/imagens/autores/'.$autor->id.'/'.$request->file('foto')->getClientOriginalName()]);

            $request->file("foto")->move(public_path('/admin/imagens/autores/'.$autor->id."/"), $request->file('foto')->getClientOriginalName());
        }

        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.autores");
    }

    public function salvar(Request $request, Autor $autor){
        $autor->nome = $request->nome;
        $autor->resumo = $request->resumo;
        $autor->save();

        if($request->file("foto")){
            Storage::delete($autor->foto);

            Autor::whereId($autor->id)
            ->update(['foto' => 'admin/imagens/autores/'.$autor->id.'/'.$request->file('foto')->getClientOriginalName()]);

            $request->file("foto")->move(public_path('/admin/imagens/autores/'.$autor->id."/"), $request->file('foto')->getClientOriginalName());
        }

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.autores');
    }
}
