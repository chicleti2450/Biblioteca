<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'nacionalidade',
    ];
}
