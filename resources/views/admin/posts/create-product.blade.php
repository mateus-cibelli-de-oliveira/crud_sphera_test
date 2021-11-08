@extends('admin.layouts.app')

@section('title')

Registrar Produto
    
@endsection    

@section('content')

<div class="container p-10 mt-5">
  <div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Registre seu produto</h1>
  </div>
  <div class="d-flex justify-content-center">
    <form action="{{ route('posts.create-product') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-30">
            <label for="name" class="mt-1">Produto</label>
            <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Ferro de passar" value="{{ $->name ?? old('name') }}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-30">
              <label for="telephone" class="mt-1">Descrição</label>
              <textarea type="text"  name="description" id="description" cols="30" rows="4" placeholder="Este produto é usado para..." class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $postProduct->description ?? old('description') }}</textarea>
            </div>
            <select name="company_id" id="company_id" class="form-control">
              <option value="">- Selecione um curso -</option>
              @if ( isset($companies) )
                  @if ( count($companies) )
                      @foreach ( $companies as $company )
                          <option value="{{ $company->id }}">{{$company->name}}</option>
                      @endforeach
                  @endif
              @endif
          </select>
        <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
    </form>
  </div>
</div>

@endsection      