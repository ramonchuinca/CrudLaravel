<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Marca;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    public function run()
    {

        $carroName = ["uno", "palio", "gol"];
        // Criar uma marca
        $marca = Marca::all('id')->pluck("id");

     foreach( range (1,3) as $index){
        Carro::create([
            'nome' => $carroName[array_rand($carroName)],
            'marca_id' => $marca->random(),
            'ano' => 2023,
            'cotacao' => 120000,
            'data_lancamento' => '2023-01-01'
        ]);
     }   // Criar carros associados a essa marca


        // Carro::create([
        //     'nome' => 'Hilux',
        //     'marca_id' => $marca->random(),
        //     'ano' => 2024,
        //     'cotacao' => 250000,
        //     'data_lancamento' => '2024-02-01'
        // ]);

        // Carro::create([
        //     'nome' => 'uno mile',
        //     'marca_id' => $marca->random(),
        //     'ano' => 2024,
        //     'cotacao' => 250000,
        //     'data_lancamento' => '2024-02-01'
        // ]);
        // Carro::create([
        //     'nome' => 'S10',
        //     'marca_id' => $marca->id,
        //     'ano' => 2024,
        //     'cotacao' => 250000,
        //     'data_lancamento' => '2024-02-01'
        // ]);


    }
}


