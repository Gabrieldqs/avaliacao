<!DOCTYPE html>
<html>
	<head>
		@extends('layouts.master')
		@section('title', 'Notas')
	</head>

	<style>
    .nomes{
    	width: 200px;
    }
    </style>
    
<body>
	<div class="botoes">
        <a href="/cadastrar" class="botao"> Cadastrar </a> <a href="/buscaDeAluno" class="botao"> Busca de Aluno</a> <a href="/notas" class="botao"> Notas</a>
    </div>

		<div class="corpo">
			<table>
				@foreach($data as $aluno)
				<tr> 
					<td class="nomes">{{ $aluno->nome }}</td>
					<td>{{ $aluno->nota }}</td>
				</tr>
				@endforeach
			</table>	
		</div>
</body>
</html>
