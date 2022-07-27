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
use App\Models\UsuarioSiteUltimosAcesso;
use Carbon\Carbon;
use Illuminate\Support\Str;

class SiteController extends Controller
{

    public function script() {
        $blogs = Blog::all();
        foreach($blogs as $blog) {
            $slug = Str::of($blog->titulo)->slug('-');

            $blog->slug = $slug;
            $blog->save();
        }

        $revistas = Revista::all();
        foreach($revistas as $revista) {
            $slug = Str::of($revista->titulo)->slug('-');

            $revista->slug = $slug;
            $revista->save();
        }

        $lista = Lista::all();
        foreach($lista as $lista) {
            $slug = Str::of($lista->titulo)->slug('-');

            $lista->slug = $slug;
            $lista->save();
        }
    }   

    public function CountView($url) {        
        $url = explode("/", $_GET['url']);
        $parte_1 = $url[1];
        $parte_2 = $url[2];
        $horas = 24;

        $nome_cookie = 'view-'.$parte_1.'-'.$parte_2;

        if(session()->get("usuario_site")){
            switch ($parte_1) {
                case 'blog_detalhe':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereBlogId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->blog_id = $parte_2;
                        $ultimo_acesso->tipo = 'blog';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->blog_id = $parte_2;
                        $ultimo_acesso->tipo = 'blog';
                        $ultimo_acesso->save();
                    }
                    break;
                case 'blog':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereBlogId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->blog_id = $parte_2;
                        $ultimo_acesso->tipo = 'blog';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->blog_id = $parte_2;
                        $ultimo_acesso->tipo = 'blog';
                        $ultimo_acesso->save();
                    }
                    break;
                case 'revista_detalhe':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereRevistaId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->revista_id = $parte_2;
                        $ultimo_acesso->tipo = 'revista';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->revista_id = $parte_2;
                        $ultimo_acesso->tipo = 'revista';
                        $ultimo_acesso->save();
                    }
                    break;
                case 'revista':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereRevistaId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->revista_id = $parte_2;
                        $ultimo_acesso->tipo = 'revista';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->revista_id = $parte_2;
                        $ultimo_acesso->tipo = 'revista';
                        $ultimo_acesso->save();
                    }
                    break;
                case 'biblioteca_detalhe':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereListaId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->lista_id = $parte_2;
                        $ultimo_acesso->tipo = 'lista';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->lista_id = $parte_2;
                        $ultimo_acesso->tipo = 'lista';
                        $ultimo_acesso->save();
                    }
                    break;
                case 'biblioteca':
                    $verifica = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
                    ->whereListaId($parte_2);
                    if($verifica) {
                        $verifica->delete();
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->lista_id = $parte_2;
                        $ultimo_acesso->tipo = 'lista';
                        $ultimo_acesso->save();
                    } else {
                        $ultimo_acesso = new UsuarioSiteUltimosAcesso;
                        $ultimo_acesso->usuario_site_id = session()->get('usuario_site')['id'];
                        $ultimo_acesso->lista_id = $parte_2;
                        $ultimo_acesso->tipo = 'lista';
                        $ultimo_acesso->save();
                    }
                    break;
            }
        }

        // Verificação do cookie
        if (isset($_COOKIE[$nome_cookie]) && $_COOKIE[$nome_cookie] == true ) {
            // Faz nada...
        } else {
            // Comando para setar o cookie
            setcookie($nome_cookie, true, time() + (3600 * $horas));

            switch ($parte_1) {
                case 'blog_detalhe':
                    Blog::whereId($parte_2)
                    ->increment('visitas');
                    break;
                case 'blog':
                    Blog::whereId($parte_2)
                    ->increment('visitas');
                    break;
                case 'revista_detalhe':
                    Revista::whereId($parte_2)
                    ->increment('visitas');
                    break;
                case 'revista':
                    Revista::whereId($parte_2)
                    ->increment('visitas');
                    break;
                case 'biblioteca_detalhe':
                    Lista::whereId($parte_2)
                    ->increment('visitas');
                    break;
                case 'biblioteca':
                    Lista::whereId($parte_2)
                    ->increment('visitas');
                    break;
            }
        }
    }

    public function CountCompartilhamento($url) {
        $url = explode("/", $_GET['url']);
        $parte_1 = $url[1];
        $parte_2 = $url[2];
        $horas = 24;

        $nome_cookie = 'share-'.$parte_1.'-'.$parte_2;

        // Verificação do cookie
        if (isset($_COOKIE[$nome_cookie]) && $_COOKIE[$nome_cookie] == true ) {
            // Faz nada...
        } else {
            // Comando para setar o cookie
            setcookie($nome_cookie, true, time() + (3600 * $horas));

            switch ($parte_1) {
                case 'blog':
                    Blog::whereId($parte_2)
                    ->increment('compartilhamentos');
                    break;
                case 'revista':
                    Revista::whereId($parte_2)
                    ->increment('compartilhamentos');
                    break;
                case 'biblioteca':
                    Lista::whereId($parte_2)
                    ->increment('compartilhamentos');
                    break;
            }
        }
    }

    public function index()
    {
        $revistas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereEmBreve(0)
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
        ->whereEmBreve(0)
        ->whereStatus(1)
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

    public function em_breve()
    {
        return view("site.em_breve");
    }

    // ------------------------------------------------
    public function blogs()
    {
        $mais_lidas = Blog::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('visitas', 'Desc')
        ->limit(3)
        ->get();
        
        return view("site.blog", ["mais_lidas" => $mais_lidas]);
    }

    public function blog(Blog $blog)
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $mes = $blog->created_at->formatLocalized('%B');

        $blog_randomicos = Blog::select(DB::raw("*"))
        ->inRandomOrder()
        ->limit(4)
        ->where('categoria_id', $blog->categoria_id)
        ->whereStatus(1)
        ->get();

        $mais_do_autors = Blog::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->limit(4)
        ->where('autor_id', $blog->autor_id)
        ->whereStatus(1)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.blog_detalhe", ["blog" => $blog, "mes" => $mes, "blog_randomicos" => $blog_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }

    public function blog_slug($slug)
    {
        $blog = Blog::whereSlug($slug)->first();
        
        if(!$blog) { return view("site.erros.erro_404"); }
        
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $mes = $blog->created_at->formatLocalized('%B');

        $blog_randomicos = Blog::select(DB::raw("*"))
        ->inRandomOrder()
        ->limit(4)
        ->where('categoria_id', $blog->categoria_id)
        ->whereStatus(1)
        ->get();

        $mais_do_autors = Blog::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->limit(4)
        ->where('autor_id', $blog->autor_id)
        ->whereStatus(1)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.blog_detalhe", ["blog" => $blog, "mes" => $mes, "blog_randomicos" => $blog_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }

    // ------------------------------------------------
    public function revistas()
    {        
        $em_breves = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereEmBreve(1)
        ->orderBy('id', 'Desc')
        ->get();
        
        $mais_lidas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereEmBreve(0)
        ->orderBy('visitas', 'Desc')
        ->limit(3)
        ->get();

        $destaques = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereEmBreve(0)
        ->whereNotNull('banner_destaque')
        ->limit(4)
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.revistas", ["mais_lidas" => $mais_lidas, "em_breves" => $em_breves, "destaques" => $destaques]);
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

        $revista_randomicos = Revista::select(DB::raw("*"))
        ->inRandomOrder()
        ->whereEmBreve(0)
        ->whereStatus(1)
        ->where('categoria_id', $revista->categoria_id)
        ->limit(4)
        ->get();

        $mais_do_autors = Revista::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->whereEmBreve(0)
        ->whereStatus(1)
        ->where('autor_id', $revista->autor_id)
        ->limit(4)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.revista_detalhe", ["revista" => $revista, "mes" => $mes, "revista_randomicos" => $revista_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }

    public function revista_slug($slug)
    {
        $revista = Revista::whereSlug($slug)->first();
        
        if(!$revista) { return view("site.erros.erro_404"); }

        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $revista->created_at->formatLocalized('%B');

        $revista_randomicos = Revista::select(DB::raw("*"))
        ->inRandomOrder()
        ->whereEmBreve(0)
        ->whereStatus(1)
        ->where('categoria_id', $revista->categoria_id)
        ->limit(4)
        ->get();

        $mais_do_autors = Revista::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->whereEmBreve(0)
        ->whereStatus(1)
        ->where('autor_id', $revista->autor_id)
        ->limit(4)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.revista_detalhe", ["revista" => $revista, "mes" => $mes, "revista_randomicos" => $revista_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }
    // ------------------------------------------------
    public function listas()
    {
        $mais_lidas = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->orderBy('visitas', 'Desc')
        ->limit(3)
        ->get();

        $lista_randomicos = Lista::select(DB::raw("*"))
        ->inRandomOrder()
        ->whereStatus(1)
        ->limit(10)
        ->get();

        return view("site.listas", ["mais_lidas" => $mais_lidas, "lista_randomicos" => $lista_randomicos]);
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

        $lista_randomicos = Lista::select(DB::raw("*"))
        ->inRandomOrder()
        ->limit(4)
        ->whereStatus(1)
        ->where('categoria_id', $lista->categoria_id)
        ->get();

        $mais_do_autors = Lista::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->limit(4)
        ->whereStatus(1)
        ->where('usuario_id', $lista->usuario_id)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.lista_detalhe", ["lista" => $lista, "mes" => $mes, "lista_randomicos" => $lista_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }

    public function lista_slug($slug)
    {
        $lista = Lista::whereSlug($slug)->first();
        
        if(!$lista) { return view("site.erros.erro_404"); }

        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');

        // Create Carbon date
        $dt = Carbon::now();
        $mes = $lista->created_at->formatLocalized('%B');

        $lista_randomicos = Lista::select(DB::raw("*"))
        ->inRandomOrder()
        ->limit(4)
        ->whereStatus(1)
        ->where('categoria_id', $lista->categoria_id)
        ->get();

        $mais_do_autors = Lista::select(DB::raw("id, titulo"))
        ->inRandomOrder()
        ->limit(4)
        ->whereStatus(1)
        ->where('usuario_id', $lista->usuario_id)
        ->get();

        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view("site.lista_detalhe", ["lista" => $lista, "mes" => $mes, "lista_randomicos" => $lista_randomicos, "mais_do_autors" => $mais_do_autors, "cursos" => $cursos]);
    }
    // ------------------------------------------------
    
    // public function biblioteca()
    // {
    //     return view("site.biblioteca");
    // }

    public function lancamento(){
        $cursos = Curso::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        setcookie('criar_conta', false, time() + 1);

        return view("site.lancamento", ["cursos" => $cursos]);
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
