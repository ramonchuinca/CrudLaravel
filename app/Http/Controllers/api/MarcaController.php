<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|unique:marcas|max:255',
            
        ]);

       return $validated;

        $marca = Marca::create($request->all());

        return response()->json(['message' => 'Marca cadastrada com sucesso.', 'marca' => $marca], 201);
    }

    public function show(Marca $marca)
    {
        return response()->json($marca);
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nome' => 'required|max:255|unique:marcas,nome,' . $marca->id,
        ]);

        $marca->update($request->all());

        return response()->json(['message' => 'Marca atualizada com sucesso.', 'marca' => $marca]);
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();

        return response()->json(['message' => 'Marca excluída com sucesso.'], 200);
    }
}












