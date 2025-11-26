<?php

namespace Modules\Correspondencia\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Correspondencia\Models\Categorias;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nombre_categoria' => 'Interna'],
            ['nombre_categoria' => 'Externa'],
        ];

        foreach ($categorias as $categoria) {
            Categorias::firstOrCreate($categoria);
        }
    }
}
