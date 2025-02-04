<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;
class Car extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome','marca','ano','cotacao','data_lancamento','marca_id',];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}

