<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostagemController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'conteudo' => 'required|string',
            'idOng' => 'required|exists:ong,idOng', // Certifique-se de que o idOng existe na tabela ongs
            'hashtags' => 'nullable|string',
            'imagem' => 'nullable|image|max:2048', // Tamanho máximo de 2MB
        ]);

        try {
            // Criação de uma nova postagem
            $postagem = new Postagem();
            $postagem->idOng = $request->input('idOng');
            $postagem->conteudo = $request->input('conteudo');
            $postagem->hashtags = $request->input('hashtags');

            // Tratamento da imagem
            if ($request->hasFile('imagem')) {
                // Armazenar a imagem e guardar o caminho
                $path = $request->file('imagem')->store('uploads', 'public');
                $postagem->imagem = $path;
            }

            // Salvar a postagem no banco de dados
            $postagem->save();

            // Retornar uma resposta JSON de sucesso
            return response()->json(['message' => 'Postagem criada com sucesso!', 'postagem' => $postagem], 201);
        } catch (\Exception $e) {
            // Log do erro para diagnóstico
            Log::error('Erro ao criar postagem: ' . $e->getMessage());
            return response()->json(['message' => 'Erro ao criar a postagem.'], 500);
        }
    }
}
