<?php

use Illuminate\Support\Facades\Route;

Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['admin'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");

    Route::get('/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre'])->name("site.sobre");
Route::get('/blog', [\App\Http\Controllers\SiteController::class, 'blog'])->name("site.blog");
Route::get('/biblioteca', [\App\Http\Controllers\SiteController::class, 'biblioteca'])->name("site.biblioteca");
Route::get('/revistas', [\App\Http\Controllers\SiteController::class, 'revistas'])->name("site.revistas");
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato'])->name("site.contato");
Route::get('/artigo', [\App\Http\Controllers\SiteController::class, 'artigo'])->name("site.artigo");
