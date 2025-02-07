<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model {
    use HasFactory;

    protected $fillable = ['nome'];

    public function carros() {
        return $this->hasMany(Carro::class, 'marca_id');
    }
}

