<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function store(Request $request){
        $autor = Autor::create([
        'nome_completo' => $request -> nome_completo,
        'data_nascimento'=> $request -> data_nascimento,
        'nacionalidade' => $request -> nacionalidade,
        ]);
        return response()-> json($autor);
    }

    public function index (){
        $autores = Autor ::all();

        return response()->json($autores);
    }

    public function show($id){
        $autor = Autor::find($id);

        if($autor == null){
            return response()->json([
                'erro' => 'Autor não encontrado'
            ]);
        }
        return response()-> json($autor);
    }

     public function update(Request $request){
        $autor = Autor::find($request->id);

        if($autor == null){
            return response()->json([
                'erro' => 'Autor não encontrado'
            ]);
        }

        if(isset($request->nome_completo)){
            $autor-> nome_completo = $request-> nome_completo;
        }

        if(isset($request->data_nascimento)) {
            $autor->data_nascimento = $request-> data_nascimento;
        }

        if(isset($request->nacionalidade)) {
            $autor->nacionalidade = $request-> nacionalidade;
        }

        $autor->update();

        return response()->json([
            'mensagem' => 'atualização'
        ]);
    }

      public function delete($id){
        $autor = Autor::find($id);

        if($autor == null){
            return response()->json([
                'erro'=> 'autor não encontrado'
            ]);
        }

        $autor->delete();

        return response()->json([
            'mensagem' => 'excluido'
        ]);
    }
}
