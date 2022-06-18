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

        $revistas_randomicas = Revista::select(DB::raw("id, titulo, autor_id"))
        ->inRandomOrder()
        ->limit(3)
        ->get();

        $listas_destaques = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereDestaque(true)
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.index", ["revistas" => $revistas, "blogs" => $blogs, "listas" => $listas, "cursos" => $cursos, "revistas_randomicas" => $revistas_randomicas, "listas_destaques" => $listas_destaques]);
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

        $comentarios = BlogComentario::where('blog_id', $blog->id)
        ->whereStatus(1)
        ->get();

        $blog_randomicos = Blog::select(DB::raw("*"))
        ->inRandomOrder()
        ->limit(4)
        ->where('categoria_id', $blog->categoria_id)
        ->get();

        $mais_do_autors = Blog::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->limit(4)
        ->where('autor_id', $blog->autor_id)
        ->get();

        return view("site.blog_detalhe", ["blog" => $blog, "mes" => $mes, "comentarios" => $comentarios, "blog_randomicos" => $blog_randomicos, "mais_do_autors" => $mais_do_autors]);
    }
    // ------------------------------------------------
    public function revistas()
    {
        $revistas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();
        
        $blogs = Blog::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();
        

        $mais_lidas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('visitas', 'Desc')
        ->limit(3)
        ->get();

        return view("site.revistas", ["revistas" => $revistas, "mais_lidas" => $mais_lidas, "blogs" => $blogs]);
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
        $listas = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('id', 'Desc')
        ->get();

        $mais_lidas = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('visitas', 'Desc')
        ->limit(3)
        ->get();

        return view("site.listas", ["listas" => $listas, "mais_lidas" => $mais_lidas]);
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
