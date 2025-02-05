<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Marca;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(Car::with('marca')->get());;
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
            // 'marca_id' => 'required|exists:marcas,id|',
            'marca' => 'required|exists:marcas,nome',
            'ano' => 'required|integer',
            'cotacao' => 'required|numeric',
            'data_lancamento' => 'required|date',

        ]);

        $array = [
            'Valor 1',
            'Valor 2',
            'Valor 3',
        ];

        // Salvar a imagem, se existir
        $marca = Marca::where('nome',$validatedData['marca'])->get()[0];

        $car = Car::create($validatedData);

     return response()->json(['message' => 'Carro criado com sucesso!', 'car' => $car], 201);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Carro não encontrado'], 404);
        }

        return response()->json($car);
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
        $car = Car::find($id);
        ;

        if (!$car) {
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

        $car->update($validatedData);

        return response()->json(['message' => 'Carro atualizado com sucesso!', 'car' => $car]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Carro não encontrado'], 404);
        }

        $car->delete();

        return response()->json(['message' => 'Carro excluído com sucesso!']);
    }
}
