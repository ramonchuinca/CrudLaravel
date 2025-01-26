<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Carro</title>
</head>
<body>
    <h1>Detalhes do Carro</h1>

    <p><strong>Nome:</strong> {{ $car->nome }}</p>
    <p><strong>Marca:</strong> {{ $car->marca }}</p>
    <p><strong>Ano:</strong> {{ $car->ano }}</p>
    <p><strong>Cotação:</strong> R$ {{ number_format($car->cotacao, 2, ',', '.') }}</p>
    <p><strong>Data de Lançamento:</strong> {{ $car->data_lancamento }}</p>

    <a href="{{ route('cars.index') }}">Voltar</a>
</body>
</html>
