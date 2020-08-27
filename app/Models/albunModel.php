<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class albunModel extends Model
{
    protected $table = "albuns";

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'lancamento',
        'artista',
        'faixas',
    ];
}
