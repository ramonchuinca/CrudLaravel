<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionais -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">Meu App</a>
    </nav>

    <main class="py-4">
        @yield('content') <!-- Local onde o conteúdo será inserido -->
    </main>

    <footer class="text-center mt-4">
        <p>© 2025 Meu App</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



    <style>
        body {
            background-color: #000;
            background-image: url('caminho/para/sua-imagem.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        footer{
            color: white
        }

        .navbar a{
            position: relative;
            left:15vh;
            font-size: 2em;
            font-weight: bold;
        }

    </style>

</body>
</html>

