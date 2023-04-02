<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JogoConsole extends Model
{
    use HasFactory;

    protected $table = 'jogos_consoles';
    protected $primaryKey = 'id_jogos_consoles';

    protected $fillable = [
        'id_jogos',
        'id_consoles'
    ];
}
