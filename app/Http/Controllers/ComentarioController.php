<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use App\Models\Postagem;
use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    // Método para criar um novo comentário
    public function store(Request $request)
    {
        $request->validate([
            'idPostagem' => 'required|integer',
            'conteudo' => 'required|string',
        ]);

        Comentario::create([
            'idPostagem' => $request->idPostagem,
            'idDoador' => auth()->user()->id,
            'conteudo' => $request->conteudo,
        ]);

        return response()->json(['message' => 'Comentário adicionado com sucesso!']);
    }

    // Método para listar comentários de uma postagem
    public function getComments($postId)
{
    $comentarios = Comentario::where('idPostagem', $postId)
        ->with('doador')
        ->get();
    return response()->json($comentarios);
}

}

