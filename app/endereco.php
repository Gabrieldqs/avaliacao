<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class endereco extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;

    protected $fillable = ['rua','numero','bairro'];

    public $rules = [
        'rua' => 'required|max:255',
        'numero' => 'required|numeric',
        'bairro' => 'required|max:255'
    ];

}
