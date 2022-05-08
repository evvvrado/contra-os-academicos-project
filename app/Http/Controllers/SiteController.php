<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{

    public function index()
    {
        return view("site.index");
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

    public function revistas()
    {
        return view("site.revistas");
    }

    public function contato()
    {
        return view("site.contato");
    }

    public function artigo()
    {
        return view("site.artigo");
    }
}
