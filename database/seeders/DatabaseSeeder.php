<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CarroSeeder::class,   // Depois, insere os carros
            MarcasSeeder::class, // Primeiro, insere marcas
        ]);
    }
}
