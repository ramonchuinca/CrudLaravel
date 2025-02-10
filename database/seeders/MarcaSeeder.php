<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    public function run()
    {
        {
            $this->call(MarcaSeeder::class);
        }

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

        ];

        // Inserindo as marcas no banco de dados
        foreach ($marcas as $marca) {
            Marca::firstOrCreate(['nome' => $marca['nome']], ['id' => $marca['id']]);
        }

        echo "Todas as marcas foram adicionadas com sucesso!";

        }
    }


