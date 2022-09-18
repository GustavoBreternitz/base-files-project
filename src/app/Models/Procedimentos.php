<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Procedimentos extends Model
{

    protected $table = 'procedimentos';

    protected $primaryKey = 'idprocedimento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dsprocedimentos',
        'flpacote',
        'vlprocedimento',
        'stprocedimento',
        'tempoprocedimento',
        'idpacote',
        'usucadastro',
        'usuatualizacao'
    ];
}
