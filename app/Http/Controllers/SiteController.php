<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Revista;
use App\Models\Usuario;

class SiteController extends Controller
{

    public function index()
    {
        $revistas = Revista::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->limit('3')
        ->get();

        return view("site.index", ["revistas" => $revistas]);
    }

    public function sobre()
    {
        return view("site.sobre");
    }

    public function blog()
    {
        return view("site.blog");
    }

    public function biblioteca()
    {
        return view("site.biblioteca");
    }
    // ------------------------------------------------
    public function revistas()
    {
        return view("site.revistas");
    }

    public function revista(Revista $revista)
    {
        return view("site.revista_detalhe", ["revista" => $revista]);
    }
    // ------------------------------------------------

    public function contato()
    {
        return view("site.contato");
    }

    public function artigo()
    {
        return view("site.artigo");
    }
}
