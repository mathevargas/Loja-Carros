<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <header>
            <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                        <span class="self-center text-xl font-semibold whitespace-nowraptext-white">Loja de Carros</span>
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="/carros" class="block py-2 pr-4 pl-3 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 text-white" aria-current="page">Menu</a>
                            </li>
                            <li>
                                <a href="/carros/create" class="block py-2 pr-4 pl-3 border-b lg:border-0 lg:hover:text-primary-700 lg:p-0 text-gray-400 lg:hover:text-white hover:bg-gray-700 over:text-white lg:hover:bg-transparent border-gray-700">Criar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>