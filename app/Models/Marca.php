<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model {
    use HasFactory;

    protected $fillable = ['nome',]; // Ajuste conforme necessário

    public function cars() {
        return $this->hasMany(Car::class, 'marca_id');
    }
}

