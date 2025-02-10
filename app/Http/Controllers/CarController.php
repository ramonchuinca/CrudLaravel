<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $cars = Carro::with('marca')->get();
        return view('carro.index', compact('carro'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'marca_id' => 'required|exists:marcas,id', // Adicionando marca_id
            'ano' => 'required|integer',
            'cotação' => 'required|numeric',
            'data_lancamento' => 'required|date',
        ]);

        Carro::create([
            'nome' => $request->nome,
            'marca_id' => $request->marca_id, // Adicionando aqui
            'ano' => $request->ano,
            'cotação' => $request->cotação,
            'data_lancamento' => $request->data_lancamento,
        ]);

        return response()->json(['message' => 'Carro criado com sucesso!']);
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
            $car = Carro::findOrFail($id);



            // Retornar a view com os detalhes do carro
            return view('carro.show', compact('carro'));
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
        $car = Carro::findOrFail($id);
        return view('carro.create', compact('carro')); // Reutiliza a mesma view
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
    $car = Carro::findOrFail($id);

    // Validação
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'marca' => 'required|string|max:255',
        'ano' => 'required|integer',
        'cotacao' => 'required|numeric',
        'data_lancamento' => 'required|date',
    ]);

        $car->update($validated);

        return redirect()->route('carro.index')->with('success', 'Carro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $car)
    {
            $car->delete();

    return redirect()->route('carro.index')->with('success', 'Carro excluído com sucesso!');
    }
}
