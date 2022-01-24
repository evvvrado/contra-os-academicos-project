<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Tag;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Configuracao;

class ArtigosController extends Controller
{
    //

    public function consultar(Request $request){
        if($request->isMethod('get')){
            $noticias = Noticia::where("tipo", 1)->get();
            return view("painel.artigos.consultar", ["noticias" => $noticias]);
        }else{
            $filtros = [];
            if($request->titulo != null){
                $filtros[] = ["titulo", "like", "%" . $request->titulo . "%"];
            }
            if($request->autor != null){
                $filtros[] = ["autor", "like", "%" . $request->autor . "%"];
            }
            if($request->categoria_id != null && $request->categoria_id != -1){
                $filtros[] = ["categoria_id", "=", $request->categoria_id];
            }
            if($request->publicacao != null && $request->publicacao != -1){
                $filtros[] = ["publicacao", "=", $request->publicacao];
            }
            $filtros[] = ['tipo', '=', 1];
            $noticias = Noticia::where($filtros)->get();
            return view("painel.artigos.consultar", ["noticias" => $noticias, "filtros" => $request->all()]);
        }
    }
    
    public function cadastro(){
        return view("painel.artigos.cadastro");
    }

    public function cadastrar(Request $request){
        // dd($request->all());
        if($request->noticia_id){
            $request->validate([
                'titulo' => 'unique:noticias,titulo,'.$request->noticia_id,
            ]);
            $noticia = Noticia::find($request->noticia_id);
        }else{
            $request->validate([
                'titulo' => 'unique:noticias,titulo',
            ]);
            $noticia = new Noticia;
            $noticia->usuario_id = session()->get("usuario")["id"];
        }
        
        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->autor = $request->autor;
        $noticia->publicacao = $request->publicacao;
        $noticia->fonte = $request->fonte;
        $noticia->resumo = $request->resumo;
        $noticia->conteudo = $request->conteudo;
        $noticia->slug = Str::slug($noticia->titulo);
        $noticia->tipo = 1;

        if(is_numeric($request->categoria_id)){
            $noticia->categoria_id = $request->categoria_id;
        }else{
            $nova_categoria = new Categoria;
            $nova_categoria->nome = $request->categoria_id;
            $nova_categoria->slug = Str::slug($nova_categoria->nome);
            $nova_categoria->save();
            $noticia->categoria_id = $nova_categoria->id;
        }

        if($request->file("preview")){
            $noticia->preview = $request->file('preview')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        if($request->file("banner")){
            $noticia->banner = $request->file('banner')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        $noticia->save();
        
        $noticia->tags()->detach();

        if($request->tags){
            foreach($request->tags as $tag){
                if(is_numeric($tag)){
                    $noticia->tags()->attach($tag);
                }else{
                    $nova_tag = new Tag;
                    $nova_tag->nome = $tag;
                    $nova_tag->save();
                    $noticia->tags()->attach($nova_tag);
                }
            }
        }
        
        // Log::channel('noticias')->info('<b>CADASTRANDO NOTICIA</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou a noticia <b>' . $noticia->titulo . '</b>');
        toastr()->success("Artigo salvo com sucesso!");

        return redirect()->route("painel.artigos");

    }

    public function editar($noticia){
        $noticia = Noticia::find($noticia);
        return view("painel.artigos.editar", ["noticia" => $noticia]);
    }

    public function deletar(Noticia $noticia){
        Storage::disk('public')->delete($noticia->preview);
        Storage::disk('public')->delete($noticia->banner);
        $noticia->tags()->detach();
        $noticia->delete();
        toastr()->success("Artigo removido com sucesso!");

        return redirect()->route("painel.artigos");
    }

    public function publicar(Noticia $noticia){
        if($noticia->publicada){
            $noticia->publicada = false;
        }else{
            $noticia->publicada = true;
        }
        $noticia->save();
        return redirect()->back();
    }

    public function preview(Noticia $noticia){
        $configuracoes = Configuracao::first();
        return view("painel.artigos.preview", ["noticia" => $noticia, "configuracoes" => $configuracoes]);
    }

    public function visitas(Noticia $noticia){
        return view("painel.artigos.leads", ['noticia' => $noticia]);
    }
}
