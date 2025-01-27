<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'cotacao' => 'required|numeric|min:0',
            'data_lancamento' => 'required|date',
        ]);

        Car::create($validated);

        return redirect()->route('cars.index')->with('success','Carro cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            // Buscar o carro pelo ID
            $car = Car::findOrFail($id);

            

            // Retornar a view com os detalhes do carro
            return view('cars.show', compact('car'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.create', compact('car')); // Reutiliza a mesma view
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
    $car = Car::findOrFail($id);

    // Validação
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'marca' => 'required|string|max:255',
        'ano' => 'required|integer',
        'cotacao' => 'required|numeric',
        'data_lancamento' => 'required|date',
    ]);

        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Carro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
            $car->delete();

    return redirect()->route('cars.index')->with('success', 'Carro excluído com sucesso!');
    }
}
