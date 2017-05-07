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

Route::get('buscaDeAluno', function () {
    return view('buscaDeAluno');
});

Route::get('cadastrar', function () {
    return view('cadastrar');
});

Route::get('notas', function () {
	
	$data['data'] = \App\aluno::all();

    return view('notas', $data);
});

Route::post('salvar','Controller@salvar');

Route::post('buscar','Controller@buscar');