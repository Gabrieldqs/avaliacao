<!DOCTYPE html>
<html>
	<head>
		@extends('layouts.master')
		@section('title', 'Cadastrar')
	</head>
	
	<style>

	.campo{
		margin-left: 20px;
		width: 200px;
	}

	</style>
<body>
	<div class="botoes">
        <a href="/cadastrar" class="botao"> Cadastrar </a> <a href="/buscaDeAluno" class="botao"> Busca de Aluno</a> <a href="/notas" class="botao"> Notas</a>
    </div>

	<div class="corpo">
		<form action="salvar" method="post">
			<table>
				<tr>
					{{ csrf_field() }}
					<td>Nome </td>
					<td><input type="text" name="nome" class="campo"></td>
				</tr>
				<tr>
					<td>Matrícula </td>
					<td><input type="text" name="matricula" class="campo"></td>
				</tr>
				<tr>
					<td>Nota </td>
					<td><input type="text" name="nota" class="campo"></td>
				</tr>
				<tr>
					<td>Rua </td>
					<td><input type="text" name="rua" class="campo"></td>
				</tr>
				<tr>
					<td>Número </td>
					<td><input type="text" name="numero" class="campo"></td>
				</tr>
				<tr>
					<td>Bairro </td>
					<td><input type="text" name="bairro" class="campo"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="salvar" class="salvar"></td>
				</tr>
			</table>	
		</form>
	</div>
	 

</body>
</html>
