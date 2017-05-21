<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  	return view('cadastrar');
});

//busca de aluno
Route::get('buscaDeAluno', function () {
    return view('buscaDeAluno');
})->name('buscaDeAluno');

//Cadastro
Route::get('cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

//Notas
Route::get('notas', function () {
	$alunos = new \App\aluno;
	$data['data'] = $alunos->paginate(10);
    return view('notas', $data);
})->name('notas');

//Form do cadastro
Route::post('salvar','Controller@salvar');

//Form da busca de alunos
Route::post('buscar','Controller@buscar');