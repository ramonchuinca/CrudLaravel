<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'marca',
        'ano',
        'cotacao',
        'data_lancamento',
        'imagem',
        'marca_id',
    ];

    public function marcas()
    {
        return $this->belongsTo(Marcas::class);
    }

}
