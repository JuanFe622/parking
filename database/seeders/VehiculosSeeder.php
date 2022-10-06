<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculo::create([
            'placa' => 'NAM103',
            'color' => 'Gris',
            'tipo' => 'Carro'
        ]);

        Vehiculo::create([
            'placa' => 'NAK816',
            'color' => 'Azul',
            'tipo' => 'Carro'
        ]);

        Vehiculo::create([
            'placa' => 'SDF548',
            'color' => 'Rojo',
            'tipo' => 'Carro'
        ]);

        Vehiculo::create([
            'placa' => 'QLQ981',
            'color' => 'Blanco',
            'tipo' => 'Carro'
        ]);

        Vehiculo::create([
            'placa' => 'COZ92E',
            'color' => 'Amarillo',
            'tipo' => 'Moto'
        ]);

        Vehiculo::create([
            'placa' => 'KJA65Q',
            'color' => 'Rojo',
            'tipo' => 'Moto'
        ]);

        Vehiculo::create([
            'placa' => 'NVK21F',
            'color' => 'Negro',
            'tipo' => 'Moto'
        ]);

    }
}
