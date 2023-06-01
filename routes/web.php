<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/produto', [HomeController::class, 'produto'])->name('site.produto');
