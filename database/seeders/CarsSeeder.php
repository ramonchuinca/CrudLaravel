<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CarsSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'nome' => 'Civic',
                'marca'=> 'nome',
                'marca_id' => 1, // Certifique-se de que o ID existe na tabela 'marcas'
                'ano' => 2015,
                'cotacao' => 30000,
                'data_lancamento' => '2015-10-02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Corolla',
                'marca'=>'nome',
                'marca_id' => 2,
                'ano' => 2018,
                'cotação' => 40000,
                'data_lancamento' => '2018-07-15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

