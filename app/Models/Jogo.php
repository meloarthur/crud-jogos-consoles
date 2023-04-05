<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';
    protected $primaryKey = 'id_jogos';

    protected $fillable = [
        'id_jogos',
        'nome',
        'descricao',
        'imagem_capa',
        'fabricante',
        'ano_lancamento',
        'faturamento'
    ];
}
