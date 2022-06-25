<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;
use App\Models\ListaVisu;
use Illuminate\Support\Facades\Storage;
use DB;

class ListasController extends Controller
{
    //
    public function consultar(){
        $listas = Lista::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();
        return view("painel.listas.consultar", ["listas" => $listas]);
    }

    public function cadastro(){
        return view("painel.listas.cadastro");
    }

    public function cadastrar(Request $request){
        if($request->tipo_pub == "publicar") {
            $lista = new Lista;
            $lista->titulo = $request->titulo;
            $lista->conteudo = $request->conteudo;
            $lista->resumo = $request->resumo;
            $lista->usuario_id = $request->usuario;
            $lista->categoria_id = $request->categoria;
            $lista->destaque = $request->destaque;
            $lista->status = 1;
            
            $lista->save();

            if($request->file("banner")){
                Lista::whereId($lista->id)
                ->update(['banner' => 'admin/imagens/listas/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/listas/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.lista");
        } elseif($request->tipo_pub == "rascunho") {
            $lista = new Lista;
            $lista->titulo = $request->titulo;
            $lista->conteudo = $request->conteudo;
            $lista->resumo = $request->resumo;
            $lista->usuario_id = $request->usuario;
            $lista->categoria_id = $request->categoria;
            $lista->destaque = $request->destaque;
            $lista->status = 2;
            
            $lista->save();

            if($request->file("banner")){
                Lista::whereId($lista->id)
                ->update(['banner' => 'admin/imagens/listas/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/listas/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.lista");
        } elseif($request->tipo_pub == "visualizar") { 
            $lista = new ListaVisu;
            $lista->titulo = $request->titulo;
            $lista->conteudo = $request->conteudo;
            $lista->usuario_id = $request->usuario;
            $lista->categoria_id = $request->categoria;
            $lista->status = 2;
            
            $lista->save();

            if($request->file("banner")){
                ListaVisu::whereId($lista->id)
                ->update(['banner' => 'admin/imagens/listas_visu/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/listas_visu/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            return redirect()->route("painel.lista.visualizar", ['lista' => $lista]);
        }

        
    }

    public function editar(Lista $lista){
        return view("painel.listas.edicao", ["lista" => $lista]);
    }

    public function salvar(Request $request, Lista $lista){
        if($request->tipo_pub == "publicar") {
            $lista->status = 1;
        } elseif($request->tipo_pub == "rascunho") {
            $lista->status = 2;
        } elseif($request->tipo_pub == "visualizar") {
            $lista = new ListaVisu;
            $lista->titulo = $request->titulo;
            $lista->conteudo = $request->conteudo;
            $lista->usuario_id = $request->usuario;
            $lista->categoria_id = $request->categoria;   
            $lista->save();

            if($request->file("banner")){
                ListaVisu::whereId($lista->id)
                ->update(['banner' => 'admin/imagens/listas_visu/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/listas_visu/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
            }


            return redirect()->route("painel.lista.visualizar", ['lista' => $lista]);
        }

        $lista->titulo = $request->titulo;
        $lista->conteudo = $request->conteudo;
        $lista->resumo = $request->resumo;
        $lista->usuario_id = $request->usuario;
        $lista->categoria_id = $request->categoria;
        $lista->destaque = $request->destaque;

        if($request->file("banner")){
            Storage::delete($lista->banner);

            Lista::whereId($lista->id)
            ->update(['banner' => 'admin/imagens/listas/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/listas/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
        }

        $lista->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.lista');
    }
}
