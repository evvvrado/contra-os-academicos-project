<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Noticia;

use App\Models\Produto;

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

        return view("site.index", ["produtos" => $produtos, "noticias" => $noticias]);
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
}
