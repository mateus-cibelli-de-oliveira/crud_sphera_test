@extends('admin.layouts.app')

@section('title')

Registrar Produto
    
@endsection    

@section('content')

<div class="container mt-40">
  <div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Registre seu produto</h1>
  </div>
  <div class="d-flex justify-content-center">
    <form action="{{ route('/posts/register-product') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-30">
            <label for="name_product" class="mt-1">Produto</label>
            <input type="text" class="form-control mt-1" id="name_product" name="name_product" placeholder="Ferre de passar" value="{{ $post->name_product ?? old('name_product') }}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-30">
              <label for="telephone" class="mt-1">Descrição</label>
              <textarea type="text"  name="description" id="description" cols="30" rows="4" placeholder="Este produto é usado para..." class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $post->description ?? old('description') }}</textarea>
            </div>
        <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
    </form>
  </div>
</div>

@endsection      