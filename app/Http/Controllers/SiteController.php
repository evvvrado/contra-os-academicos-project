<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Noticia;
use App\Models\Anuncio;
use App\Models\Produto;
use App\Models\Lead;

class SiteController extends Controller
{
    public function mapa()
    {
        return view("site.mapa");
    }

    public function index()
    {
        $noticias = Noticia::select(DB::raw("preview, titulo, publicacao"))
            ->orderBy('id', 'Desc')
            ->limit('3')
            ->get();

        $produtos = Produto::all();

        $publicidade = Anuncio::first();

        return view("site.index", ["produtos" => $produtos, "noticias" => $noticias, "publicidade" => $publicidade]);
    }

    public function sobre()
    {
        return view("site.sobre");
    }

    public function servicos()
    {
        return view("site.servicos");
    }

    public function blog()
    {
        $noticias = Noticia::all();

        return view("site.blog", ["noticias" => $noticias]);
    }

    public function blogDetalhes()
    {
        return view("site.blog-detalhes");
    }

    public function contato()
    {
        return view("site.contato");
    }

    public function coqueteis()
    {
        return view("site.coqueteis");
    }

    public function coquetel()
    {
        return view("site.coquetel");
    }

    public function acessarCliente()
    {
        return view("site.acesso");
    }

    public function logarCliente(Request $request)
    {
        $lead = Lead::where("email", $request->email)->first();
        if($lead){
            if($request->senha == $lead->senha){
                session()->put(["cliente" => $lead->toArray()]);
                return redirect()->route("minha-area.cliente");
            }else{
                toastr()->error("Informações de usuário incorretas!");
            }
        }else{
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();

        // return view("site.acesso");
    }
}
