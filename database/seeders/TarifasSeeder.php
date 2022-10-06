<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarifa;

class TarifasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarifa::create([
            'tipo' => 'Carro',
            'precio' => 3000
        ]);

        Tarifa::create([
            'tipo' => 'Moto',
            'precio' => 1000
        ]);
    }
}
