<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faixaModel extends Model
{
    protected $table = "faixas";

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'duracao',
        'albun',
        'ordem',
    ];
}
