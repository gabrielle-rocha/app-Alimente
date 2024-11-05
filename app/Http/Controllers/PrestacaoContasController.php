<?php

namespace App\Http\Controllers;

use App\Models\PrestacaoConta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestacaoContasController extends Controller
{
    public function store(Request $request)
{
    // Validação dos arquivos
    $request->validate([
        'idOng' => 'required|exists:ong,idOng', // Validação do idOng
        'balanco' => 'required|file|mimes:pdf,doc,docx,xlsx,xls',
        'demonstracao' => 'required|file|mimes:pdf,doc,docx,xlsx,xls',
        'receitas' => 'required|file|mimes:pdf,doc,docx,xlsx,xls',
        'despesas' => 'required|file|mimes:pdf,doc,docx,xlsx,xls',
        'fotos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB máximo por foto
    ]);

    // Armazenar os arquivos
    $balancoPath = $request->file('balanco')->store('prestacoes_contas');
    $demonstracaoPath = $request->file('demonstracao')->store('prestacoes_contas');
    $receitasPath = $request->file('receitas')->store('prestacoes_contas');
    $despesasPath = $request->file('despesas')->store('prestacoes_contas');

    // Armazenar as fotos
    $fotosPaths = [];
    if ($request->hasFile('fotos')) {
        foreach ($request->file('fotos') as $foto) {
            $fotosPaths[] = $foto->store('storage/prestacao');
        }
    }

    // Salvar no banco de dados
    PrestacaoConta::create([
        'idOng' => $request->idOng, // Adicione esta linha para inserir o idOng
        'balanco' => $balancoPath,
        'demonstracao' => $demonstracaoPath,
        'receitas' => $receitasPath,
        'despesas' => $despesasPath,
        'fotos' => json_encode($fotosPaths), // Armazene as fotos como JSON, se necessário
    ]);

    return redirect()->back()->with('success', 'Prestação de contas enviada com sucesso!');
}

}
