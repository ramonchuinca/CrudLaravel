<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        DB::table('marcas')->insert([
            ['id' => 1, 'nome' => 'Honda'],
            ['id' => 2, 'nome' => 'Toyota'],
        ]);
    }
}
