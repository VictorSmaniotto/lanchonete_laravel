<?php

namespace Database\Seeders;

use App\Models\Categoria;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categorias')->insert([
            ['titulo' => 'Pizza'],
            ['titulo' => 'Bebida'],
            ['titulo' => 'Lanche'],
            ['titulo' => 'Suco'],
            ['titulo' => 'Porção'],
        ]);
    }
}
