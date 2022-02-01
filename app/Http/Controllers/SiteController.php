<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Produto;

class SiteController extends Controller
{
    public function mapa()
    {
        return view("site.mapa");
    }

    public function index()
    {
        $produtos = Produto::all();

        return view("site.index", ["produtos" => $produtos]);
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
        return view("site.blog");
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
}
