<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function mapa()
    {
        return view("site.mapa");
    }

    public function index()
    {
        return view("site.index");
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
}
