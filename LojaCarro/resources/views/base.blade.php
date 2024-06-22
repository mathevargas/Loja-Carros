<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <style>
        body {
            background-image: url('foto_loja.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800">
        <div class="container mx-auto px-4 lg:px-6 py-2.5">
            <div class="flex justify-between items-center max-w-screen-xl">
                <span class="text-xl font-semibold whitespace-nowrap text-white">Loja de Carros</span>
                <div class="hidden lg:flex lg:w-auto" id="mobile-menu-2">
                    <ul class="flex space-x-8">
                        <li>
                            <a href="/carros" class="block py-2 px-3 rounded bg-primary-700 text-white">Lista</a>
                        </li>
                        <li>
                            <a href="/carros/create" class="block py-2 px-3 rounded bg-primary-700 text-white hover:bg-gray-700">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container mx-auto mt-4 px-4 lg:px-6"> <!-- Ajustei a margem superior para separar do cabeçalho -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
