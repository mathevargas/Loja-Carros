@extends('base')
@section('content')
<div class="mt-12 relative overflow-y-scroll w-full max-h-[40vh] shadow-md sm:rounded-lg">
  <table class="table-auto w-full text-sm text-left rtl:text-right text-gray-400">
    <thead class="text-xs uppercase bg-gray-700  sticky top-0 text-gray-400">
      <tr>
        <th class="px-6 py-3">
          Nome
        </th>
        <th class="px-6 py-3">
          Marca
        </th>
        <th class="px-6 py-3">
          Modelo
        </th>
        <th class="px-6 py-3">
          Placa
        </th>
        <th class="px-6 py-3">
          Ano
        </th>
        <th class="px-6 py-3">
          Km
        </th>
        <th class="px-6 py-3">
          Cor
        </th>
        <th class="text-center">
          Ações
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($carros as $c)
      <tr class=" border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
        <th class="px-6 py-4">
          {{ $c->nome }}
        </th>
        <td class="px-6 py-4">
          {{ $c->marca }}
        </td>
        <td class="px-6 py-4">
          {{ $c->modelo }}
        </td>
        <td class="px-6 py-4">
          {{ $c->placa }}
        </td>
        <td class="px-6 py-4">
          {{ $c->ano }}
        </td>
        <td class="px-6 py-4">
          {{ $c->km }}
        </td>
        <td class="px-6 py-4">
          {{ $c->cor }}
        </td>
        <td class="text-center">
          <a href="{{ route('carros.edit', $c->id) }}" class="font-medium text-blue-500 hover:underline">Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot class="bg-gray-700 w-full sticky bottom-0">
      <tr class="font-semibold text-gray-900">
        <th colspan="7" scope="row" class="px-6 py-3 text-base">Carros Cadastrados:</th>
        <td class="px-6 py-3">{{ $carros->count() }}</td>
      </tr>
    </tfoot>
  </table>
</div>
@if(isset($msg))
<script>
  alert("{{$msg}}");
</script>
@endif
@endsection