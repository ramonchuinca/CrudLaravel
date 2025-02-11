<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MarcaSeeder::class, // Primeiro, insere marcas
            CarroSeeder::class,   // Depois, insere os carros
        ]);
    }
}
