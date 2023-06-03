<?php

use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/produto/{id}', [HomeController::class, 'produto'])->name('site.produto');

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/cadastrar', [LoginController::class, 'registrar'])->name('auth.registro');


Route::get('/admin/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
