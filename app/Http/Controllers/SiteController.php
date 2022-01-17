<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    //
    public function __construct()
    {
        View::share('configuracoes', \App\Models\Configuracao::first());
    }



    public function mapa()
    {
        return view("site.mapa");
    }

    public function index()
    {
        return view("site.index");
    }
}
