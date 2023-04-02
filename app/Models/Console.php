<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $table = 'consoles';
    protected $primaryKey = 'id_consoles';

    protected $fillable = [
        'nome',
        'fabricante'
    ];
}
