<?php

namespace App\Http\Controllers;

// use View;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use DB;
use App\Models\Revista;
use App\Models\Blog;
use App\Models\Lista;
use App\Models\Curso;
use Carbon\Carbon;
use App\Models\BlogComentario;

class SiteController extends Controller
{

    public function index()
    {
        $revistas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();

        $blogs = Blog::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();

        $listas = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.index", ["revistas" => $revistas, "blogs" => $blogs, "listas" => $listas, "cursos" => $cursos]);
    }

    public function sobre()
    {
        return view("site.sobre");
    }

    // ------------------------------------------------
    public function blogs()
    {
        $blogs = Blog::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();
        
        return view("site.blog", ["blogs" => $blogs]);
    }

    public function blog(Blog $blog)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $mes = $blog->created_at->formatLocalized('%B');

        $comentarios = BlogComentario::where('blog_id', $blog->id)->get();

        return view("site.blog_detalhe", ["blog" => $blog, "mes" => $mes, "comentarios" => $comentarios]);
    }
    // ------------------------------------------------
    public function revistas()
    {
        return view("site.revistas");
    }

    public function revista(Revista $revista)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $revista->created_at->formatLocalized('%B');

        return view("site.revista_detalhe", ["revista" => $revista, "mes" => $mes]);
    }
    // ------------------------------------------------
    public function listas()
    {
        return view("site.listas");
    }

    public function lista(Lista $lista)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $lista->created_at->formatLocalized('%B');

        return view("site.lista_detalhe", ["lista" => $lista, "mes" => $mes]);
    }
    // ------------------------------------------------
    
    public function biblioteca()
    {
        return view("site.biblioteca");
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
