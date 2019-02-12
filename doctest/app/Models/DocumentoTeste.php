<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentoTeste extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome_submenu',
        'nome_do_teste',
        'comando_teste',
        'descricao_teste',
        'id_pagina'
    ];

}
