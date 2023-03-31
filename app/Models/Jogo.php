<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';
    protected $primaryKey = 'jogos_id';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem_capa',
        'fabricante',
        'console',
        'ano_lancamento',
    ];
}