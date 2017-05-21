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

        $aluno = new \App\aluno;
        $endereco = new \App\endereco;

        //validacoes
        $errosAluno = [
            'nome.required' => 'O nome é obrigatório',
            'nome.max' => 'O nome está grande demais',
            'matricula.required' => 'A matrícula é obrigatória',
            'matricula.numeric' => 'A matrícula deve conter apenas números',
            'matricula.unique' => 'A matrícula já existe',
            'nota.required' => 'A nota é obrigatória',
            'nota.numeric' => 'A nota deve conter apenas números',
            'nota.min' => 'O valor mínimo da nota é 0',
            'nota.max' => 'O valor máximo da nota é 10',
        ];
        $errosEndereco = [
            'rua.required' => 'O nome da rua é obrigatório',
            'rua.max' => 'O nome da rua está grande demais',
            'numero.required' => 'O número do endereço é obrigatório',
            'numero.numeric' => 'O número do endereço deve conter apenas números',
            'bairro.required' => 'O nome do bairro é obrigatório',
            'bairro.max' => 'O nome do bairro é grande demais',
        ];

        $this->validate($req , $aluno->rules, $errosAluno);
        $this->validate($req , $endereco->rules, $errosEndereco);

    	//Caso tudo esteja valido
    	//Obtém o id do endereço digitado
	    $id = $endereco->where([['rua', '=', $rua],['numero', '=', $numero],['bairro', '=', $bairro]])->value('id');
	    	
	    //Se o endereço ainda não está cadastrado, o cadastro é feito
	    if(count($id)==0){
	    	$data = array('rua'=>$rua,'numero'=>$numero,'bairro'=>$bairro);
	    	$endereco->create($data);
	    	$id = $endereco->where([['rua', '=', $rua],['numero', '=', $numero],['bairro', '=', $bairro]])->value('id');
	    }

	    //Insere o novo aluno com o endereço digitado
	    $data = array('nome'=>$nome,'matricula'=>$matricula,'nota'=>$nota,'endereco_id'=>$id);
        $aluno->create($data);

        $msg = 'Cadastro efetuado!';
	    return(view('cadastrar',['mensagem'=>$msg]));
    }


    function buscar(Request $req){

    	$nome = $req->input('nome');

        $alunotemp = new \App\aluno;
        $enderecotemp = new \App\endereco;

        //validacao
        $erros = ['nome.required' => 'O nome está vazio'];
        $this->validate($req , $alunotemp->rulesBusca,$erros);

        //obtem os dados do aluno
    	$aluno = $alunotemp->where('nome','like',$nome."%")->first();

        //Se o aluno existir
        if(!empty($aluno)){
            $endereco = $enderecotemp->join('alunos','enderecos.id','=','alunos.endereco_id')->where('alunos.endereco_id','=',$aluno->endereco_id)->first();
    		
            //return redirect()->route('buscaDeAluno',['aluno'=>$aluno,'endereco'=>$endereco]);
            return view('buscaDeAluno',['aluno'=>$aluno,'endereco'=>$endereco]);
        }
    	else{
            return redirect()->route('buscaDeAluno');
        }
    }

}
