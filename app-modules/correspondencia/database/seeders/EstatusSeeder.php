<?php

namespace Modules\Correspondencia\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Correspondencia\Models\Estatus;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estatus = [
            ['nombre_estatus' => 'Saliente'],
            ['nombre_estatus' => 'En transito'],
            ['nombre_estatus' => 'Entregada'],
            ['nombre_estatus' => 'Entrante'],
            ['nombre_estatus' => 'Pendiente'],
        ];
        
        foreach ($estatus as $data) {
            Estatus::firstOrCreate($data);
        }
    }
}
