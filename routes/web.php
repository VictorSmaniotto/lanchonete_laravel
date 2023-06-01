<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/produto/{id}', [HomeController::class, 'produto'])->name('site.produto');

Route::get('/admin', function () {
    return view('layouts.admin');
});
