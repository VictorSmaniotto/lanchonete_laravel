<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProdutoController;
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
Route::get('/admin/usuarios/cadastrar', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('/admin/usuarios/editar/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');


Route::get('/admin/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/admin/categorias/cadastrar', [CategoriaController::class, 'create'])->name('categoria.create');
Route::get('/admin/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');


Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/admin/produtos/cadastrar', [ProdutoController::class, 'create'])->name('produto.create');
Route::get('/admin/produtos/editar/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
