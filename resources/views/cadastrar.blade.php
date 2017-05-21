

@extends('layouts.master')

@section('title','Cadastrar')

@section('cadastrarAtivo','class="active"')

@section('conteudo')
 <div class="container">
  <form action="salvar" method="post">
  	{{ csrf_field() }}

    <div class="form-group ">
      <label>Nome: </label>
      <input type="text" class="form-control input-sm"  placeholder="Nome do aluno" name="nome" value='{{ old('nome') }}'>
    </div>

    <div class="form-group">
      <label>Matrícula: </label>
      <input type="text" class="form-control" placeholder="Número de matrícula" name="matricula" value='{{ old('matricula') }}'>
    </div>

    <div class="form-group">
      <label>Nota: </label>
      <input type="text" class="form-control" placeholder="Nota" name="nota" value='{{ old('nota') }}'>
    </div>

    <div class="form-group">
      <label>Rua: </label>
      <input type="text" class="form-control" placeholder="Rua do endereço" name="rua" value='{{ old('rua') }}'>
    </div>

    <div class="form-group">
      <label>Número: </label>
      <input type="text" class="form-control" placeholder="Número do endereço" name="numero" value='{{ old('numero') }}'>
    </div>

    <div class="form-group">
      <label>Bairro: </label>
      <input type="text" class="form-control" placeholder="Bairro do endereço" name="bairro" value='{{ old('bairro') }}'>
    </div>

    <button type="submit" value="salvar" class="btn btn-primary">Salvar</button>

  </form>

    @if(isset($errors) && count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

  	<p></p>
  	<h3>{{ $mensagem or null}}</h3>

</div>
@endsection