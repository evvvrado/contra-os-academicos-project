<?php

use Illuminate\Support\Facades\Route;


Route::get('/mapa', [\App\Http\Controllers\SiteController::class, 'mapa'])->name("site.mapa");
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre'])->name("site.sobre");
Route::get('/servicos', [\App\Http\Controllers\SiteController::class, 'servicos'])->name("site.servicos");
Route::get('/blog', [\App\Http\Controllers\SiteController::class, 'blog'])->name("site.blog");
Route::get('/blog/detalhes', [\App\Http\Controllers\SiteController::class, 'blogDetalhes'])->name("site.blog-detalhes");

Route::middleware(['aluno'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
});
Route::middleware(['admin'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name("painel.logs");
});
