<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable =[
        'data_devolucao',
        'codigo_membro',
        'codigo_livro',
    ];
}
