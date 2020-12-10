<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'galc',
        'porta',
        'endereco_instalacao',
        'velocidade'
    ];

}
