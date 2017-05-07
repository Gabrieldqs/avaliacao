<!DOCTYPE html>
<html>
    <head>
        @extends('layouts.master')
        @section('title', 'Busca de Aluno')
    </head>

    <style>
    .campo{
        width: 100px;
    }
    #campo1{
        width: 100px;
    }
    </style>

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

                @if(empty($aluno))

                @else
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
