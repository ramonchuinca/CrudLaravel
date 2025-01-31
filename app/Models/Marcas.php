<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    use HasFactory;

    protected $fillable = ['nome_id', 'marca', 'ano', 'cotacao', 'data_lancamento'];

    public function cars()

    {
        return $this->hasMany(Car::class);
    }
}
