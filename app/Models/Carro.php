<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'marca_id'];

    public function marcas()
    {
        return $this->belongsTo(Marca::class, foreignKey: 'marca_id');
    }
}
