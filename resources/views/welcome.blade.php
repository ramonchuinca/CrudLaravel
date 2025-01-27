<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('/images/foto-teste-1.jpg');
                background-repeat: no-repeat;
                background-size: cover

            }
            .btn-primary {
                background-color: #3490dc;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                transition: background-color 0.3s;
                font-size: 1.8em;
                font-weight: bold;
            }

            .btn-primary:hover {
                background-color: #2779bd;
            }

            .flex-center {
                display: flex;
                justify-content: center;
                margin-top: 25rem;
            }
        </style>
    </head>
    <body>
                <!-- Botão para outra página -->
                <div class="flex-center">
                    <a href="/cars" class="btn-primary">ACESSE A PROXIMA TELA DE CARROS</a>
                </div>
    </body>
</html>
