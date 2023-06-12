<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $id)
    {
        return view('admin.categorias.editar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $id)
    {
        //
    }
}
