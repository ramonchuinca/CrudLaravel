@extends('layouts.app')
@section('content')
<div class="container">

<h1
style="border: 2px solid white; color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5) font-weight: bold;
border-radius:10px; text-align: center;">
Lista de Carros</h1>

    <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Criar Novo Carro</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Cotação</th>
                <th>Data de Lançamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->nome }}</td>
                <td>{{ $car->marca }}</td>
                <td>{{ $car->ano }}</td>
                <td>R$ {{ number_format($car->cotacao, 2, ',', '.') }}</td>
                <td>{{ $car->data_lancamento }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
