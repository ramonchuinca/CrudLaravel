@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="color: white">{{ isset($car) ? 'Editar Carro' : 'Cadastrar Novo Carro' }}</h1>
    <form action="{{ isset($car) ? route('cars.update', $car) : route('cars.store') }}" method="POST">
        @csrf
        @if(isset($car))
            @method('PUT')
        @endif

        <div class="mb-3" style="color: white">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $car->nome ?? '' }}" required>
        </div>
        <div class="mb-3" style="color: white">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-control" id="marca" name="marca" required>
                <option value="">Selecione uma marca</option>
            </select>
        </div>
        <div class="mb-3" style="color: white">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ $car->ano ?? '' }}" required>
        </div>
        <div class="mb-3" style="color: white">
            <label for="cotacao" class="form-label">Cotação</label>
            <input type="number" step="0.01" class="form-control" id="cotacao" name="cotacao" value="{{ $car->cotacao ?? '' }}" required>
        </div>
        <div class="mb-3" style="color: white">
            <label for="data_lancamento" class="form-label">Data de Lançamento</label>
            <input type="date" class="form-control" id="data_lancamento" name="data_lancamento" value="{{ $car->data_lancamento ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($car) ? 'Atualizar' : 'Cadastrar' }}</button>

        <!-- Botão para voltar à página principal -->
        <a href="{{ url('cars') }}" class="btn btn-primary ml-2">Voltar para a Página Principal</a>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const marcaSelect = document.getElementById("marca");

    axios.get("{{ route('marcas.index') }}")  // Ajuste para a rota correta
        .then(response => {
            const marcas = response.data; // Supondo que o backend retorna um JSON com as marcas
            marcas.forEach(marca => {
                const option = document.createElement("option");
                option.value = marca.id;
                option.textContent = marca.nome;

                // Se estiver editando um carro, definir a marca correta
                if ("{{ $car->marca ?? '' }}" == marca.id) {
                    option.selected = true;
                }

                marcaSelect.appendChild(option);
            });
        })
        .catch(error => console.error("Erro ao buscar marcas:", error));
});
</script>




<script>
    const marcasUrl = "{{ route('marcas.index') }}";
    console.log("URL das marcas:", marcasUrl);
</script>






<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marcaSelect = document.getElementById("marca");

        axios.get("{{ route('marcas.index') }}") // Obtém a lista de marcas do backend
            .then(response => {
                const marcas = response.data; // Supondo que o backend retorna JSON com marcas
                marcas.forEach(marca => {
                    const option = document.createElement("option");
                    option.value = marca.id;
                    option.textContent = marca.nome;

                    // Se estiver editando um carro, define a marca correta
                    if ("{{ $car->marca ?? '' }}" == marca.id) {
                        option.selected = true;
                    }

                    marcaSelect.appendChild(option);
                });
            })
            .catch(error => console.error("Erro ao buscar marcas:", error));
    });
</script>



@endsection
