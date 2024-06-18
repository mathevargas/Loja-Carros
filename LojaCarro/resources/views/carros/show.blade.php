{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Carro não encontrado!</h3>
    @else
    {{-- senão, mostra os daddos --}}
        <h2>Mostrando dados do veículo</h2>
        <p><strong>Nome:</strong> {{ $carros->name }} </p>
        <p><strong>Ano:</strong> {{ $carros->year }} </p>
        <p><strong>Cor:</strong> {{ $carros->color }} </p>
        <a href="{{ route('carros.index') }}">Voltar</a>
    @endif
@endsection