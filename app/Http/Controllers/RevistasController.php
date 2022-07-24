<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revista;
use App\Models\RevistaVisu;
use DB;
use Illuminate\Support\Facades\Storage;

class RevistasController extends Controller
{
    //
    public function consultar(){
        return view("painel.revistas.consultar");
    }

    public function cadastro(){
        return view("painel.revistas.cadastro");
    }

    public function cadastrar(Request $request){
        if($request->tipo_pub == "publicar") {
            $revista = new Revista;
            $revista->titulo = $request->titulo;
            $revista->conteudo = $request->conteudo;
            $revista->resumo = $request->resumo;
            $revista->referencias = $request->referencias;
            $revista->usuario_id = $request->usuario;
            $revista->autor_id = $request->autor;
            $revista->categoria_id = $request->categoria;
            $revista->status = 1;
            $revista->save();

            if($request->file("banner")){
                Revista::whereId($revista->id)
                ->update(['banner' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            if($request->file("banner_destaque")){
                Revista::whereId($revista->id)
                ->update(['banner_destaque' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner_destaque')->getClientOriginalName()]);

                $request->file("banner_destaque")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner_destaque')->getClientOriginalName());
            }


            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.revista");
        } elseif($request->tipo_pub == "rascunho") { 
            $revista = new Revista;
            $revista->titulo = $request->titulo;
            $revista->conteudo = $request->conteudo;
            $revista->resumo = $request->resumo;
            $revista->referencias = $request->referencias;
            $revista->usuario_id = $request->usuario;
            $revista->autor_id = $request->autor;
            $revista->categoria_id = $request->categoria;
            $revista->status = 2;
            $revista->save();

            if($request->file("banner")){
                Revista::whereId($revista->id)
                ->update(['banner' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            if($request->file("banner_destaque")){
                Revista::whereId($revista->id)
                ->update(['banner_destaque' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner_destaque')->getClientOriginalName()]);

                $request->file("banner_destaque")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner_destaque')->getClientOriginalName());
            }


            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.revista");
        } elseif($request->tipo_pub == "visualizar") { 
            $revista = new RevistaVisu;
            $revista->titulo = $request->titulo;
            $revista->conteudo = $request->conteudo;
            $revista->usuario_id = $request->usuario;
            $revista->autor_id = $request->autor;
            $revista->categoria_id = $request->categoria;
            $revista->save();

            if($request->file("banner")){
                RevistaVisu::whereId($revista->id)
                ->update(['banner' => 'admin/imagens/revistas_visu/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/revistas_visu/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
            }


            return redirect()->route("painel.revista.visualizar", ['revista' => $revista]);
        }
    }

    public function editar(Revista $revista){
        return view("painel.revistas.edicao", ["revista" => $revista]);
    }

    public function salvar(Request $request, Revista $revista){
        if($request->tipo_pub == "publicar") {
            $revista->status = 1;
        } elseif($request->tipo_pub == "rascunho") {
            $revista->status = 2;
        } elseif($request->tipo_pub == "visualizar") {
            $revista = new RevistaVisu;
            $revista->titulo = $request->titulo;
            $revista->conteudo = $request->conteudo;
            $revista->usuario_id = $request->usuario;
            $revista->autor_id = $request->autor;
            $revista->categoria_id = $request->categoria;
            $revista->save();

            if($request->file("banner")){
                RevistaVisu::whereId($revista->id)
                ->update(['banner' => 'admin/imagens/revistas_visu/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/revistas_visu/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
            }

            return redirect()->route("painel.revista.visualizar", ['revista' => $revista]);
        }

        $revista->titulo = $request->titulo;
        $revista->conteudo = $request->conteudo;
        $revista->resumo = $request->resumo;
        $revista->referencias = $request->referencias;
        $revista->usuario_id = $request->usuario;
        $revista->autor_id = $request->autor;
        $revista->categoria_id = $request->categoria;

        if($request->file("banner")){
            Storage::delete($revista->banner);

            Revista::whereId($revista->id)
            ->update(['banner' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
        }

        if($request->file("banner_destaque")){
            Revista::whereId($revista->id)
            ->update(['banner_destaque' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner_destaque')->getClientOriginalName()]);

            $request->file("banner_destaque")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner_destaque')->getClientOriginalName());
        }

        $revista->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.revista');
    }
}
