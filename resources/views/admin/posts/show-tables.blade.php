@extends('admin.layouts.app')

@section('title')

Listagem Geral
    
@endsection    

@section('content')

<div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Listagem Geral</h1>
</div>

<div class="px-md-5">

<table>
    <thead>
      <tr>
        <th scope="col" class="px-md-5">Empresa</th>
        <th scope="col">Produto</th>
        <th scope="col" class="px-md-5">Descrição</th>
        <th scope="col" class="-ml-10">Ações</th>
      </tr>
    </thead>

<tbody>
  @foreach ($products as $product)
      <tr>
          <td class="px-6 px-md-5 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
              {{ $product->company->name }}
          </td>   
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
              {{ $product->name }}
          </td>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
            <span class="d-flex pl-10">{{ $product->description }}</span>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
            <a href="{{ route('posts.destroy', $product->id) }}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Deletar</a>
          </td>
      </tr>
  @endforeach 
</tbody>
</table>

</div>

@endsection