
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
@endsection

<!--
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
