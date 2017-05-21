<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class aluno extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;

    protected $fillable = ['nome','matricula','nota','endereco_id'];
    
    public $rules = [
        'nome' => 'required|max:255',
        'matricula' => 'required|numeric|unique:alunos',
        'nota' => 'required|numeric|min:0|max:10'
    ];

    public $rulesBusca = [
        'nome' => 'required|max:255',
    ];

}
