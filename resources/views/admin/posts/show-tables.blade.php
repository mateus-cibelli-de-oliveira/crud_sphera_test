@extends('admin.layouts.app')

@section('title')

Listagem Geral
    
@endsection    

@section('content')

<div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Listagem Geral</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Empresa</th>
        <th scope="col">Produto</th>
      </tr>
    </thead>
<tbody>
  @foreach ($companies as $postCompany && $products as $postProduct)
      <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
              #{{ $postCompany->name }}
          </td>   
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
              {{ $postProduct->name }}
          </td>
          <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
            <a href="{{ route('posts.destroy', $postCompany->id, $postProduct->id) }}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Deletar</a>
          </td>
      </tr>
  @endforeach 
</tbody>
</table>

@endsection