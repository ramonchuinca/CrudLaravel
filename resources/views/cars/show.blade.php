@extends('layouts.app')

@section('content')
<div class="container">
    <h1
        style="border: 2px solid white; color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); font-weight: bold;
        border-radius:10px; text-align: center;">
        Detalhes do Carro: {{ $car->nome }}
    </h1>

    <!-- Exibir Imagem do Carro -->
    <div class="row mb-4">
        <div class="col-md-6">
            @if ($car->imagem)
                <img src="{{ asset('storage/' . $car->imagem) }}" alt="Imagem do Carro" class="img-fluid" />
            @else
                <p style="color: white">Sem imagem disponível</p>
            @endif
        </div>

        <!-- Detalhes do Carro -->
        <div class="col-md-6">
            <ul class="list-unstyled">
                <li><strong>Nome:</strong> {{ $car->nome }}</li>
                <li><strong>Marca:</strong> {{ $car->marca }}</li>
                <li><strong>Ano:</strong> {{ $car->ano }}</li>
                <li><strong>Cotação:</strong> R$ {{ number_format($car->cotacao, 2, ',', '.') }}</li>
                <li><strong>Data de Lançamento:</strong> {{ $car->data_lancamento }}</li>
            </ul>
        </div>
    </div>

    <!-- Botão para voltar à lista de carros -->
    <a href="{{ route('cars.index') }}" class="btn btn-primary">Voltar para a Lista de Carros</a>
</div>

<style>
    .list-unstyled{
        color: white
    }
</style>
@endsection
