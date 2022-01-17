<?php

use Illuminate\Support\Facades\Route;


Route::get('/mapa', [\App\Http\Controllers\SiteController::class, 'mapa'])->name("site.mapa");
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");

Route::middleware(['aluno'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
});
Route::middleware(['admin'])->group(function () {
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name("painel.logs");
});
