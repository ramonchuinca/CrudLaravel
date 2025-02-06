<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        return response()->json(Marca::all()); // Retorna todas as marcas em JSON
    }
    



}











