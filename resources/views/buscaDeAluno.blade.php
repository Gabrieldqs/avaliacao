
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
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->matricula }}</td>
                <td>{{ $aluno->nota }}</td>
                <td>{{ $endereco->rua }}</td>
                <td>{{ $endereco->numero }}</td>
                <td>{{ $endereco->bairro }}</td>
              </tr>
            </tbody>
            @endif
          </table>
        </div>
    </form>
</div> 

@endsection

<!---

<body>
    <div class="botoes">
        <a href="/cadastrar" class="botao"> Cadastrar </a> <a href="/buscaDeAluno" class="botao"> Busca de Aluno</a> <a href="/notas" class="botao"> Notas</a>
    </div>

    <div class="corpo">
        <form action="buscar" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td id="campo1">Nome </td>
                    <td><input type="text" name="nome"> </td>
                    <td><input type="submit" name="submit" value="buscar" id="submit"></td>
                </tr>

                @if(!empty($aluno))
                <tr>
                    <td class="campo">Nome</td>
                    <td>{{$aluno->nome or '' }}</td>
                </tr>
                <tr>
                    <td class="campo">Matricula</td>
                    <td>{{$aluno->matricula or '' }}</td>
                </tr>
                <tr>
                    <td class="campo">Nota </td>
                    <td>{{$aluno->nota or '' }}</td>
                </tr>
                <tr>
                    <td class="campo">Rua</td>
                    <td>{{$endereco->rua or '' }}</td>
                </tr>
                <tr>
                    <td class="campo">Número </td>
                    <td>{{$endereco->numero or '' }}</td>
                </tr>
                <tr>
                    <td class="campo">Bairro </td>
                    <td>{{$endereco->bairro or '' }}</td>
                </tr>
                @endif

            </table>    
        </form>
    </div>

</body>
</html>
