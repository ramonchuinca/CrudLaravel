<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MarcasSeeder::class, // Primeiro, insere marcas
            CarSeeder::class,   // Depois, insere os carros
        ]);
    }
}
