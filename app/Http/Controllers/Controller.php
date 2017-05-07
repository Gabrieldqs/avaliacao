<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function salvar(Request $req){

    	$nome = $req->input('nome');
    	$matricula = $req->input('matricula');
    	$nota = $req->input('nota');
    	$rua = $req->input('rua');
    	$numero = $req->input('numero');
    	$bairro = $req->input('bairro');



    	//Checa se a matrícula já existe
    	if(count(DB::table('alunos')->where('matricula','=', $matricula)->value('id'))>0){
    		echo 'Matrícula já existe';
    	}

    	//Checa se existem campos vazios
    	else if(empty($nome)or empty($matricula)or empty($nota)or empty($rua)or empty($numero)or empty($bairro)){
    		echo 'Existem campos vazios';
    	}

    	//Caso a matricula seja válida e campos preenchidos
    	else{
    		//Obtém o id do endereço digitado
	    	$id = DB::table('enderecos')->where([['rua', '=', $rua],['numero', '=', $numero],['bairro', '=', $bairro]])->value('id');
	    	
	    	//Se o endereço ainda não está cadastrado, o cadastro é feito
	    	if(count($id)==0){
	    		$data = array('rua'=>$rua,'numero'=>$numero,'bairro'=>$bairro);
	    		DB::table('enderecos')->insert($data);
	    		$id = DB::table('enderecos')->where([['rua', '=', $rua],['numero', '=', $numero],['bairro', '=', $bairro]])->value('id');
	    	}

	    	//Insere o novo aluno com o endereço digitado
	    	$data = array('nome'=>$nome,'matricula'=>$matricula,'nota'=>$nota,'endereco_id'=>$id);
	    	DB::table('alunos')->insert($data);
            
	    	return back();
	    }
    	
    }

    function buscar(Request $req){

    	$nome = $req->input('nome');
        //Se campo nao estiver vazio
        if(!empty($nome))
    	    $aluno =  DB::table('alunos')->where('nome','like',$nome."%")->first();

        //Se o aluno existir
        if(!empty($aluno)){
            $endereco = DB::table('enderecos')->join('alunos','enderecos.id','=','alunos.endereco_id')->where('alunos.endereco_id','=',$aluno->endereco_id)->first();
    		return view('buscaDeAluno',['aluno'=>$aluno,'endereco'=>$endereco]);
        }
    	else 
    		echo 'Esse aluno não existe';
    }

}
