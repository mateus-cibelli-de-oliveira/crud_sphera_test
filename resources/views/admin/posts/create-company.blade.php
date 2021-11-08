@extends('admin.layouts.app')

@section('title')

Cadastrar Empresa
    
@endsection    

@section('content')

<div class="container mt-40">
  <div class="mb-4">
    <h1 class="d-flex justify-content-center text-3xl">Cadastrar Empresa</h1>
  </div>
  <div class="d-flex justify-content-center">
    <form action="{{ route('/posts/create-company') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-30">
            <label for="name" class="mt-1">Empresa</label>
            <input type="text" class="form-control mt-1" id="name" name="name" placeholder="EspecializaTI" value="{{ $postCompany->name ?? old('name') }}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-30">
              <label for="telephone" class="mt-1">Telefone</label>
              <input type="text" class="form-control mt-1" id="telephone" name="telephone" placeholder="(21)968-1423" value="{{ $postCompany->telephone ?? old('telephone') }}" onkeypress="$(this).mask('(00) 0000-00009')">
            </div>
        <div class="form-row">
          <div class="form-group col-md-30">
            <label for="cep" class="mt-1">CEP</label>
            <input type="text" class="form-control mt-1" id="cep" name="cep" placeholder="20.036-150" value="{{ $post->cep ?? old('cep') }}" onkeypress="$(this).mask('00.000-000')">
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
    </form>
  </div>
</div>

@endsection      