
@extends('layouts.master')
@section('title', 'Notas')

@section('notasAtivo','class="active"')

@section('conteudo')
<div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Nota</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $aluno)
              <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->nota }}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
     </div>
     {!! $data->links() !!}
@endsection
