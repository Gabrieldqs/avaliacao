

@extends('layouts.master')

@section('title','Cadastrar')

@section('cadastrarAtivo','class="active"')

@section('conteudo')
 <div class="container">
  <form action="salvar" method="post">
  	{{ csrf_field() }}

    <div class="form-group ">
      <label>Nome: </label>
      <input type="text" class="form-control input-sm"  placeholder="Nome do aluno" name="nome">
    </div>

    <div class="form-group">
      <label>Matrícula: </label>
      <input type="text" class="form-control" placeholder="Número de matrícula" name="matricula">
    </div>

    <div class="form-group">
      <label>Nota: </label>
      <input type="text" class="form-control" placeholder="Nota" name="nota">
    </div>

    <div class="form-group">
      <label>Rua: </label>
      <input type="text" class="form-control" placeholder="Rua do endereço" name="rua">
    </div>

    <div class="form-group">
      <label>Número: </label>
      <input type="text" class="form-control" placeholder="Número do endereço" name="numero">
    </div>

    <div class="form-group">
      <label>Bairro: </label>
      <input type="text" class="form-control" placeholder="Bairro do endereço" name="bairro">
    </div>

    <button type="submit" value="salvar" class="btn btn-primary">Salvar</button>

  </form>
</div>
@endsection

<!--
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
