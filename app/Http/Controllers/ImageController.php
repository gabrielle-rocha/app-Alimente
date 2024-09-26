<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Store a newly created image in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação do arquivo
        $request->validate([
            'file' => 'required|file|image|max:2048', // 2MB máximo
        ]);

        // Armazena o arquivo na pasta 'public/uploads'
        if ($request->file()) {
            // Gera um nome único para o arquivo
            $fileName = time() . '_' . $request->file->getClientOriginalName();

            // Verifica se a pasta 'uploads' existe, caso contrário, cria
            $uploadsPath = storage_path('app/public/uploads');
            if (!file_exists($uploadsPath)) {
                mkdir($uploadsPath, 0775, true); // Cria a pasta 'uploads' se não existir
            }

            // Salva o arquivo na pasta 'public/uploads'
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            // Salva o caminho da imagem no banco de dados
            $image = new Image();
            $image->file_path = '/storage/' . $filePath;

            if (!$image->save()) {
                return back()->withErrors('Erro ao salvar no banco de dados.');
            }

            return back()
                ->with('success', 'Imagem carregada e salva com sucesso.')
                ->with('file', $fileName);
        }

        return back()->withErrors('Nenhum arquivo enviado.');
    }
}
