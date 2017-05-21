
@extends('layouts.master')
@section('title', 'Busca de Aluno')

@section('buscaAtivo','class="active"')

@section('conteudo')

<div class="row">
    <form action="buscar" method="post">
        {{ csrf_field() }}

        <div class="col-xs-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control">
            <button type="submit" name="submit" value="buscar" class="btn btn-primary">Buscar</button>

            @if(isset($errors) && count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
            
        </div>

        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Matricula</th>
                <th>Nota</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Bairro</th>
              </tr>
            </thead>
            @if(!empty($aluno))
            <tbody>
              <tr>
                <td>{{ $aluno->nome or ''}}</td>
                <td>{{ $aluno->matricula or ''}}</td>
                <td>{{ $aluno->nota or ''}}</td>
                <td>{{ $endereco->rua or ''}}</td>
                <td>{{ $endereco->numero or ''}}</td>
                <td>{{ $endereco->bairro or ''}}</td>
              </tr>
            </tbody>
            @endif
          </table>
        </div>
    </form>
</div> 

@endsection
