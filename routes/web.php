<?php

use Google\Service\CloudRun\Route as CloudRunRoute;
use Illuminate\Support\Facades\Route;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;



Route::get('/teste', [\App\Http\Controllers\SiteController::class, 'teste'])->name("site.teste");
Route::get('/oauth/gmail', function (){
    return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function (){
    LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function (){
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});


Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

// AUTENTICACAO
Route::get('/sistema/verificar_conta', [\App\Http\Controllers\UsuarioSitesController::class, 'verificar_conta'])->name("minha_area.verificar_conta");
Route::get('/sistema/verifica_autenticacao', [\App\Http\Controllers\UsuarioSitesController::class, 'verificar_autenticacao'])->name("minha_area.verificar_autenticacao");
Route::get('/sistema/trocar_senha', [\App\Http\Controllers\UsuarioSitesController::class, 'trocar_senha'])->name("minha_area.trocar_senha");
Route::get('/sistema/nova_senha', [\App\Http\Controllers\UsuarioSitesController::class, 'nova_senha'])->name("minha_area.nova_senha");
Route::post('/sistema/trocar_senha_solicitacao', [\App\Http\Controllers\UsuarioSitesController::class, 'trocar_senha_solicitacao'])->name("minha_area.trocar_senha_solicitacao");
Route::post('/sistema/trocar_senha_act', [\App\Http\Controllers\UsuarioSitesController::class, 'trocar_senha_act'])->name("minha_area.trocar_senha_act");

Route::middleware(['admin'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");

    Route::get('/painel/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

    // ROTAS DE COMENTÁRIOS
    Route::get('/sistema/comentarios/blog', [\App\Http\Controllers\PainelController::class, 'comentarios_blog'])->name("painel.comentarios.blog");
    Route::get('/sistema/comentarios/blog/moderar/{blogcomentario}', [\App\Http\Controllers\PainelController::class, 'moderar_comentarios_blog'])->name("painel.comentarios_blog.moderar");

    // ROTAS DE USUÁRIOS DO SITE
    Route::get('/sistema/usuarios_site/consultar', [\App\Http\Controllers\PainelController::class, 'usuarios_site'])->name("painel.usuarios_site");
    Route::get('/sistema/usuarios_site/assinatura/{usuario_site}', [\App\Http\Controllers\PainelController::class, 'assinatura'])->name("painel.usuarios_site.assinatura");
    Route::post('/sistema/usuarios_site/assinar/{usuario_site}', [\App\Http\Controllers\PainelController::class, 'assinar'])->name("painel.usuarios_site.assinar");
    Route::get('/sistema/usuarios_site/finalizar_assinatura/{assinatura}', [\App\Http\Controllers\PainelController::class, 'finalizar_assinatura'])->name("painel.usuarios_site.encerrar_assinatura");

    // ROTAS DE CATEGORIAS
    Route::get('/sistema/categorias/consultar', [\App\Http\Controllers\CategoriasController::class, 'consultar'])->name("painel.categorias");
    Route::get('/sistema/categorias/cadastro', [\App\Http\Controllers\CategoriasController::class, 'cadastro'])->name("painel.categoria.cadastro");
    Route::post('/sistema/categorias/cadastrar', [\App\Http\Controllers\CategoriasController::class, 'cadastrar'])->name("painel.categoria.cadastrar");
    Route::post('/sistema/categorias/salvar/{categoria}', [\App\Http\Controllers\CategoriasController::class, 'salvar'])->name("painel.categoria.salvar");

    // ROTAS DE AUTORES
    Route::get('/sistema/autores/consultar', [\App\Http\Controllers\AutorsController::class, 'consultar'])->name("painel.autores");
    Route::post('/sistema/autores/cadastrar', [\App\Http\Controllers\AutorsController::class, 'cadastrar'])->name("painel.autor.cadastrar");
    Route::post('/sistema/autores/salvar/{autor}', [\App\Http\Controllers\AutorsController::class, 'salvar'])->name("painel.autor.salvar");

    // ROTAS DE TRADUTORES
    Route::get('/sistema/tradutores/consultar', [\App\Http\Controllers\TradutorsController::class, 'consultar'])->name("painel.tradutores");
    Route::post('/sistema/tradutores/cadastrar', [\App\Http\Controllers\TradutorsController::class, 'cadastrar'])->name("painel.tradutor.cadastrar");
    Route::post('/sistema/tradutores/salvar/{tradutor}', [\App\Http\Controllers\TradutorsController::class, 'salvar'])->name("painel.tradutor.salvar");

    // ROTAS DE BLOG
    Route::get('/sistema/blog/consultar', [\App\Http\Controllers\BlogsController::class, 'consultar'])->name("painel.blog");
    Route::get('/sistema/blog/cadastro', [\App\Http\Controllers\BlogsController::class, 'cadastro'])->name("painel.blog.cadastro");
    Route::post('/sistema/blog/cadastrar', [\App\Http\Controllers\BlogsController::class, 'cadastrar'])->name("painel.blog.cadastrar");
    Route::get('/sistema/blog/editar/{blog}', [\App\Http\Controllers\BlogsController::class, 'editar'])->name("painel.blog.editar");
    Route::post('/sistema/blog/salvar/{blog}', [\App\Http\Controllers\BlogsController::class, 'salvar'])->name("painel.blog.salvar");

    Route::post('/sistema/blog_visu/cadastrar', [\App\Http\Controllers\BlogVisusController::class, 'cadastrar'])->name("painel.blog_visu.cadastrar");
    Route::get('/sistema/blog/visualizar/{blog}', [\App\Http\Controllers\BlogVisusController::class, 'visualizar'])->name("painel.blog.visualizar");

    // ROTAS DE LISTAS
    Route::get('/sistema/lista/consultar', [\App\Http\Controllers\ListasController::class, 'consultar'])->name("painel.lista");
    Route::get('/sistema/lista/cadastro', [\App\Http\Controllers\ListasController::class, 'cadastro'])->name("painel.lista.cadastro");
    Route::post('/sistema/lista/cadastrar', [\App\Http\Controllers\ListasController::class, 'cadastrar'])->name("painel.lista.cadastrar");
    Route::get('/sistema/lista/editar/{lista}', [\App\Http\Controllers\ListasController::class, 'editar'])->name("painel.lista.editar");
    Route::post('/sistema/lista/salvar/{lista}', [\App\Http\Controllers\ListasController::class, 'salvar'])->name("painel.lista.salvar");

    Route::post('/sistema/lista_visu/cadastrar', [\App\Http\Controllers\ListaVisusController::class, 'cadastrar'])->name("painel.lista_visu.cadastrar");
    Route::get('/sistema/lista/visualizar/{lista}', [\App\Http\Controllers\ListaVisusController::class, 'visualizar'])->name("painel.lista.visualizar");

    // ROTAS DE REVISTAS
    Route::get('/sistema/revista/consultar', [\App\Http\Controllers\RevistasController::class, 'consultar'])->name("painel.revista");
    Route::get('/sistema/revista/cadastro', [\App\Http\Controllers\RevistasController::class, 'cadastro'])->name("painel.revista.cadastro");
    Route::post('/sistema/revista/cadastrar', [\App\Http\Controllers\RevistasController::class, 'cadastrar'])->name("painel.revista.cadastrar");
    Route::get('/sistema/revista/editar/{revista}', [\App\Http\Controllers\RevistasController::class, 'editar'])->name("painel.revista.editar");
    Route::post('/sistema/revista/salvar/{revista}', [\App\Http\Controllers\RevistasController::class, 'salvar'])->name("painel.revista.salvar");

    Route::post('/sistema/revista_visu/cadastrar', [\App\Http\Controllers\RevistaVisusController::class, 'cadastrar'])->name("painel.revista_visu.cadastrar");
    Route::get('/sistema/revista/visualizar/{revista}', [\App\Http\Controllers\RevistaVisusController::class, 'visualizar'])->name("painel.revista.visualizar");

    // ROTAS DE CURSOS
    Route::get('/sistema/curso/consultar', [\App\Http\Controllers\CursosController::class, 'consultar'])->name("painel.curso");
    Route::get('/sistema/curso/cadastro', [\App\Http\Controllers\CursosController::class, 'cadastro'])->name("painel.curso.cadastro");
    Route::post('/sistema/curso/cadastrar', [\App\Http\Controllers\CursosController::class, 'cadastrar'])->name("painel.curso.cadastrar");
    Route::get('/sistema/curso/editar/{curso}', [\App\Http\Controllers\CursosController::class, 'editar'])->name("painel.curso.editar");
    Route::post('/sistema/curso/salvar/{curso}', [\App\Http\Controllers\CursosController::class, 'salvar'])->name("painel.curso.salvar");

    // ROTAS DE USUÁRIOS
    Route::get('/sistema/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/sistema/usuarios/inativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_inativos'])->name("painel.usuarios.inativos");
    Route::get('/sistema/usuarios/ativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_ativos'])->name("painel.usuarios.ativos");
    Route::get('/sistema/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/sistema/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/sistema/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/sistema/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");
    Route::get('/sistema/usuarios/bloqueio/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'bloqueio'])->name("painel.usuario.bloqueio");

    // ROTAS DE SETORES
    Route::get('/sistema/setores', [\App\Http\Controllers\SetorsController::class, 'consultar'])->name("painel.setores");
    Route::get('/sistema/setores/cadastro', [\App\Http\Controllers\SetorsController::class, 'cadastro'])->name("painel.setores.cadastro");
    Route::post('/sistema/setores/cadastrar', [\App\Http\Controllers\SetorsController::class, 'cadastrar'])->name("painel.setores.cadastrar");
});


// ROTAS DO USUARIO DO SITE
Route::get('/minha-area/login', [\App\Http\Controllers\UsuarioSitesController::class, 'login'])->name("minha_area.login");
Route::post('/minha-area/logar', [\App\Http\Controllers\UsuarioSitesController::class, 'logar'])->name("minha_area.logar");

Route::get('/minha-area/registro', [\App\Http\Controllers\UsuarioSitesController::class, 'registro'])->name("minha_area.registro");
Route::post('/minha-area/registrar', [\App\Http\Controllers\UsuarioSitesController::class, 'registrar'])->name("minha_area.registrar");
Route::get('/minha-area/autenticacao', [\App\Http\Controllers\UsuarioSitesController::class, 'autenticacao'])->name("minha_area.autenticacao");
Route::post('/minha-area/autentica', [\App\Http\Controllers\UsuarioSitesController::class, 'autentica'])->name("minha_area.autentica");


Route::middleware(['usuario_site'])->group(function () {
    Route::get('/minha-area', [\App\Http\Controllers\UsuarioSitesController::class, 'index'])->name("minha_area.index");

    Route::post('/minha-area/comentar/{blog}', [\App\Http\Controllers\BlogComentariosController::class, 'comentar'])->name("minha_area.comentar");

    Route::get('/minha-area/perfil', [\App\Http\Controllers\UsuarioSitesController::class, 'perfil'])->name("minha_area.perfil");
    Route::post('/minha-area/perfil/salvar/{usuario_site}', [\App\Http\Controllers\UsuarioSitesController::class, 'perfil_salvar'])->name("minha_area.perfil.salvar");

    Route::get('/minha_area/sair', [\App\Http\Controllers\UsuarioSitesController::class, 'sair'])->name("minha_area.sair");
});

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre'])->name("site.sobre");
Route::get('/assine', [\App\Http\Controllers\SiteController::class, 'lancamento'])->name("site.lancamento");

Route::get('/em_breve', [\App\Http\Controllers\SiteController::class, 'em_breve'])->name("site.em_breve");

Route::get('/blog', [\App\Http\Controllers\SiteController::class, 'blogs'])->name("site.blog");
Route::get('/blog_detalhe/{blog}', [\App\Http\Controllers\SiteController::class, 'blog'])->name("site.blog_detalhe");
Route::get('/blog/{slug}', [\App\Http\Controllers\SiteController::class, 'blog_slug'])->name("site.blog_detalhe_slug");
// Route::get('/biblioteca', [\App\Http\Controllers\SiteController::class, 'biblioteca'])->name("site.biblioteca");

Route::get('/revistas', [\App\Http\Controllers\SiteController::class, 'revistas'])->name("site.revistas");
Route::get('/revista_detalhe/{revista}', [\App\Http\Controllers\SiteController::class, 'revista'])->name("site.revista_detalhe");
Route::get('/revista/{slug}', [\App\Http\Controllers\SiteController::class, 'revista_slug'])->name("site.revista_detalhe_slug");

Route::get('/biblioteca', [\App\Http\Controllers\SiteController::class, 'listas'])->name("site.listas");
Route::get('/biblioteca_detalhe/{lista}', [\App\Http\Controllers\SiteController::class, 'lista'])->name("site.lista_detalhe");
Route::get('/biblioteca/{slug}', [\App\Http\Controllers\SiteController::class, 'lista_slug'])->name("site.lista_detalhe_slug");

Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato'])->name("site.contato");
Route::get('/artigo', [\App\Http\Controllers\SiteController::class, 'artigo'])->name("site.artigo");

Route::post('pay', [\App\Http\Controllers\PagamentosController::class, 'pay'])->name('payment');
Route::get('success', [\App\Http\Controllers\PagamentosController::class, 'success']);
Route::get('error', [\App\Http\Controllers\PagamentosController::class, 'error']);

Route::get('/script_slug', [\App\Http\Controllers\SiteController::class, 'script'])->name("site.script_slug");


// AJAX
Route::get('/contabiliza_views/{url}', [\App\Http\Controllers\SiteController::class, 'CountView'])->name("contabilizar_view");
Route::get('/contabiliza_compartilhamento/{url}', [\App\Http\Controllers\SiteController::class, 'CountCompartilhamento'])->name("contabilizar_compartilhamento");

// PAGINAS DE ERRO
Route::fallback(function () { return view('site/erros/erro_404'); });