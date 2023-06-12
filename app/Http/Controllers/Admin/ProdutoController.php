<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.produtos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('admin.produtos.cadastrar', [
            'categorias' => $categorias
        ]);
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
    public function edit($id)
    {
        $categorias = Categoria::all();

        return view('admin.produtos.editar', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $id)
    {
        //
    }
}
