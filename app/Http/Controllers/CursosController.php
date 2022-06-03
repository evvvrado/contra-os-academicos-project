<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Storage;

class CursosController extends Controller
{
    //
    public function consultar(){
        $cursos = Curso::all();
        return view("painel.cursos.consultar", ["cursos" => $cursos]);
    }

    public function cadastro(){
        return view("painel.cursos.cadastro");
    }

    public function cadastrar(Request $request){
        $curso = new Curso;
        $curso->titulo = $request->titulo;
        $curso->conteudo = $request->conteudo;
        $curso->categoria_id = $request->categoria;
        
        $curso->save();

        if($request->file("banner")){
            Curso::whereId($curso->id)
            ->update(['banner' => 'admin/imagens/cursos/'.$curso->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/cursos/'.$curso->id."/"), $request->file('banner')->getClientOriginalName());
        }


        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.curso");
    }

    public function editar(Curso $curso){
        return view("painel.cursos.edicao", ["curso" => $curso]);
    }

    public function salvar(Request $request, Curso $curso){
        $curso->titulo = $request->titulo;
        $curso->conteudo = $request->conteudo;
        $curso->categoria_id = $request->categoria;

        if($request->file("banner")){
            Storage::delete($curso->banner);

            Curso::whereId($curso->id)
            ->update(['banner' => 'admin/imagens/cursos/'.$curso->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/cursos/'.$curso->id."/"), $request->file('banner')->getClientOriginalName());
        }

        $curso->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.curso');
    }
}
