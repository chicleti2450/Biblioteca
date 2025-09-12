<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
     public function store(Request $request){
        $emprestimo = Emprestimo::create([
        'data_devolucao' => $request -> data_devolucao,
        'codigo_membro'=> $request -> codigo_membro,
        'codigo_livro' => $request -> codigo_livro,
        ]);
        return response()-> json($emprestimo);
    }

    public function index (){
        $emprestimos = Emprestimo ::all();

        return response()->json($emprestimos);
    }
}
