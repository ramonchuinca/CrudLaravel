<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Marca;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    public function run()
    {


        // Criar uma marca
        $marca = Marca::firstOrCreate(['nome' => 'Toyota']);

        // Criar carros associados a essa marca
        Carro::create([
            'nome' => 'Corolla',
            'marca_id' => $marca->id,
            'ano' => 2023,
            'cotacao' => 120000,
            'data_lancamento' => '2023-01-01'
        ]);

        Carro::create([
            'nome' => 'Hilux',
            'marca_id' => $marca->id,
            'ano' => 2024,
            'cotacao' => 250000,
            'data_lancamento' => '2024-02-01'
        ]);

        Carro::create([
            'nome' => 'uno mile',
            'marca_id' => $marca->id,
            'ano' => 2024,
            'cotacao' => 250000,
            'data_lancamento' => '2024-02-01'
        ]);
        Carro::create([
            'nome' => 'S10',
            'marca_id' => $marca->id,
            'ano' => 2024,
            'cotacao' => 250000,
            'data_lancamento' => '2024-02-01'
        ]);
    }
}


