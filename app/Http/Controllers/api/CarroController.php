<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carro;
use App\Models\Marca;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carro = Carro::with('marcas')->get();
        return response()->json($carro, 200);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id|',
            // 'marca' => 'required|exists:marca,nome',
            'ano' => 'required|integer',
            'cotacao' => 'required|numeric',
            'data_lancamento' => 'required|date',

        ]);

        $carro = Carro::create($validatedData);

     return response()->json(['message' => 'Carro criado com sucesso!', 'carro' => $carro], 201);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);

        if (!$carro) {
            return response()->json(['message' => 'Carro não encontrado'], 404);
        }

        return response()->json($carro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carro = Carro::find($id);


        if (!$carro) {
            return response()->json(['message' => 'Carro não encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'nullable|string|max:255',
            'marca' => 'nullable|string|max:255',
            'ano' => 'nullable|integer',
            'cotacao' => 'nullable|numeric',
            'data_lancamento' => 'nullable|date',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Atualizar a imagem, se existir
        if ($request->hasFile('imagem')) {
            $filePath = $request->file('imagem')->store('images', 'public');
            $validatedData['imagem'] = $filePath;
        }

        $carro->update($validatedData);


        return response()->json(['message' => 'Carro atualizado com sucesso!', 'carro' => $carro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);

        if (!$carro) {
            return response()->json(['message' => 'Carro não encontrado'], 404);
        }

        $carro->delete();

        return response()->json(['message' => 'Carro excluído com sucesso!']);
    }

    public function listarCarrosPorMarca($id)
{
    $carros = Carro::where('marca_id', $id)->get();

    if ($carros->isEmpty()) {
        return response()->json(['message' => 'Nenhum carro encontrado para esta marca'], 404);
    }

    return response()->json($carros, 200);
}






}
