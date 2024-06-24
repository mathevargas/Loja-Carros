<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Define o título da página usando a variável de ambiente APP_NAME do Laravel -->
    <title>{{ env('APP_NAME') }}</title>
    <!-- Define estilos CSS internos para a página -->
    <style>
        body {
            /* Aplica uma imagem de fundo para o corpo da página */
            background-image: url('foto_loja.jpg');
            background-size: cover; /* Cobertura total da imagem */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Não repete a imagem */
            height: 100vh; /* Define a altura como 100% da viewport */
            margin: 0; /* Remove margens padrão */
        }
    </style>
    <!-- Possivelmente uma diretiva de compilação de CSS para algum sistema de build -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <!-- Cabeçalho da página -->
    <header class="bg-gray-800">
        <div class="container mx-auto px-4 lg:px-6 py-2.5">
            <div class="flex justify-between items-center max-w-screen-xl">
                <!-- Título da aplicação -->
                <span class="text-xl font-semibold whitespace-nowrap text-white">Loja de Carros</span>
                <!-- Menu de navegação para telas grandes -->
                <div class="hidden lg:flex lg:w-auto" id="mobile-menu-2">
                    <ul class="flex space-x-8">
                        <!-- Link para a lista de carros -->
                        <li>
                            <a href="/carros" class="block py-2 px-3 rounded bg-primary-700 text-white">Lista</a>
                        </li>
                        <!-- Link para a página de cadastro de carros -->
                        <li>
                            <a href="/carros/create" class="block py-2 px-3 rounded bg-primary-700 text-white hover:bg-gray-700">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Contêiner principal para o conteúdo da página -->
    <div class="container mx-auto mt-4 px-4 lg:px-6">
        <!-- Inclui o conteúdo dinâmico da página através do Blade do Laravel -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
