@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($car) ? 'Editar Carro' : 'Cadastrar Novo Carro' }}</h1>
    <form action="{{ isset($car) ? route('cars.update', $car) : route('cars.store') }}" method="POST">
        @csrf
        @if(isset($car))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $car->nome ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ $car->marca ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ $car->ano ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="cotacao" class="form-label">Cotação</label>
            <input type="number" step="0.01" class="form-control" id="cotacao" name="cotacao" value="{{ $car->cotacao ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="data_lancamento" class="form-label">Data de Lançamento</label>
            <input type="date" class="form-control" id="data_lancamento" name="data_lancamento" value="{{ $car->data_lancamento ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($car) ? 'Atualizar' : 'Cadastrar' }}</button>

        <!-- Botão para voltar à página principal -->
        <a href="{{ url('cars') }}" class="btn btn-primary ml-2">Voltar para a Página Principal</a>
    </form>
</div>
@endsection
