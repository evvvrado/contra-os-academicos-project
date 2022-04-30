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
}
