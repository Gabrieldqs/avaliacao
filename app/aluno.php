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

    protected $fillable = [
        'nome', 'numero', 'matricula','nota','endereco_id'
    ];

    

}
