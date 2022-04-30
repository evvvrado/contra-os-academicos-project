<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
