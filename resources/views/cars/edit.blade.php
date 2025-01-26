<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
</head>
<body>
    <h1>Editar Carro</h1>

    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $car->nome }}" required>
        <br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="{{ $car->marca }}" required>
        <br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" value="{{ $car->ano }}" required>
        <br>

        <label for="cotacao">Cotação:</label>
        <input type="number" step="0.01" id="cotacao" name="cotacao" value="{{ $car->cotacao }}" required>
        <br>

        <label for="data_lancamento">Data de Lançamento:</label>
        <input type="date" id="data_lancamento" name="data_lancamento" value="{{ $car->data_lancamento }}" required>
        <br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
