<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        $marcas = [
            ['id' => 1, 'nome' => 'Chevrolet'],
            ['id' => 2, 'nome' => 'Fiat'],
            ['id' => 3, 'nome' => 'Volkswagen'],
            ['id' => 4, 'nome' => 'Ford'],
            ['id' => 5, 'nome' => 'Renault'],
            ['id' => 6, 'nome' => 'Peugeot'],
            ['id' => 7, 'nome' => 'BMW'],
            ['id' => 8, 'nome' => 'Mercedes-Benz'],
            ['id' => 9, 'nome' => 'Audi'],
            ['id' => 10, 'nome' => 'Volvo'],
            ['id' => 11, 'nome' => 'Porsche'],
            ['id' => 12, 'nome' => 'Lexus'],
            ['id' => 13, 'nome' => 'Jaguar'],
            ['id' => 14, 'nome' => 'Land Rover'],
            ['id' => 15, 'nome' => 'Toyota'],
            ['id' => 16, 'nome' => 'Honda'],
            ['id' => 17, 'nome' => 'Nissan'],
            ['id' => 18, 'nome' => 'Hyundai'],
            ['id' => 19, 'nome' => 'Kia'],
            ['id' => 20, 'nome' => 'Chery (Caoa Chery)'],
            ['id' => 21, 'nome' => 'Mitsubishi'],
            ['id' => 22, 'nome' => 'Suzuki'],
            ['id' => 23, 'nome' => 'BYD'],
            ['id' => 24, 'nome' => 'Ferrari'],
            ['id' => 25, 'nome' => 'Lamborghini'],
            ['id' => 26, 'nome' => 'Maserati'],
            ['id' => 27, 'nome' => 'Bentley'],
            ['id' => 28, 'nome' => 'Rolls-Royce'],
            ['id' => 29, 'nome' => 'McLaren'],
        ];

        foreach ($marcas as $marca) {
            DB::table('marcas')->updateOrInsert(
                ['nome' => $marca['nome']], // Se já existir, atualiza
                $marca // Caso contrário, insere
            );
        }
    }
}

