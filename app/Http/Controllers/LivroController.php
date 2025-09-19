<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
     public function store(Request $request){
        $livro = Livro::create([
        'titulo' => $request -> titulo,
        'ano_publicacao'=> $request -> ano_publicacao,
        'genero' => $request -> genero,
        ]);
        return response()-> json($livro);
    }

    public function index (){
        $livros = Livro ::all();

        return response()->json($livros);
    }

     public function show($id){
        $livro = Livro::find($id);

        if($livro == null){
            return response()->json([
                'erro' => 'Livro não encontrado'
            ]);
        }
        return response()-> json($livro);
    }

     public function update(Request $request){
        $livro =  Livro::find($request->id);

        if($livro == null){
            return response()->json([
                'erro' => 'Livro não encontrada'
            ]);
        }

        if(isset($request->titulo)){
            $livro-> titulo = $request-> titulo;
        }

        if(isset($request->ano_lancamento)) {
            $livro->ano_lancamento = $request-> ano_lancamento;
        }

        if(isset($request->genero)) {
            $livro->genero = $request-> genero;
        }

        $livro->update();

        return response()->json([
            'mensagem' => 'atualização'
        ]);
    }

    public function delete($id){
        $livro = Livro::find($id);

        if($livro == null){
            return response()->json([
                'erro'=> 'livro não encontrado'
            ]);
        }

        $livro->delete();

        return response()->json([
            'mensagem' => 'excluido'
        ]);
    }
}
