<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/blog', [\App\Http\Controllers\SiteController::class, 'blog'])->name("site.blog");
Route::get('/biblioteca', [\App\Http\Controllers\SiteController::class, 'biblioteca'])->name("site.biblioteca");
Route::get('/revistas', [\App\Http\Controllers\SiteController::class, 'revistas'])->name("site.revistas");
