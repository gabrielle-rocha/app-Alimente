<?php

namespace App\Http\Controllers;

use App\Models\Campanha;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeedOngController extends Controller
{
    public function index()
    {
        // Verifica se o usuário está autenticado e possui um idOng
        if (Auth::check() && Auth::user()->idOng) {
            // Obtém o ID da ONG associada ao usuário logado
            $ongId = Auth::user()->idOng;

            // Busca campanhas associadas a essa ONG
            $campanhas = Campanha::where('idOng', $ongId)->get();

            // Passa a variável $campanhas para a view, mesmo que esteja vazia
            if ($campanhas->isEmpty()) {
                return view('feedOng', compact('campanhas'));
            }

            return view('feedOng', compact('campanhas'));
        } else {
            // Redireciona para login ou exibe mensagem de erro se não autenticado
            return redirect()->route('logindoador')->withErrors('Você precisa estar logado para ver as campanhas.');
        }

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomeCampanha' => 'required|string|max:100',
            'assuntoCampanha' => 'nullable|string|max:255',
            'descricaoCampanha' => 'required|string',
            'imagemCampanha' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dataInicioCampanha' => 'nullable|date',
            'dataFimCampanha' => 'nullable|date',
        ]);

        $campanha = Campanha::where('idOng', Auth::user()->idOng)->find($id);

        if (!$campanha) {
            return response()->json(['error' => 'Campanha não encontrada ou não pertence à sua ONG'], 404);
        }

        // Atualiza os dados da campanha
        $campanha->fill($request->except('imagemCampanha'));

        if ($request->hasFile('imagemCampanha')) {
            if ($campanha->imagemCampanha) {
                Storage::disk('public')->delete($campanha->imagemCampanha);
            }
            $campanha->imagemCampanha = $request->file('imagemCampanha')->store('campanhas', 'public');
        }

        $campanha->save();

        return response()->json([
            'idCampanha' => $campanha->idCampanha,
            'nomeCampanha' => $campanha->nomeCampanha,
            'assuntoCampanha' => $campanha->assuntoCampanha,
            'descricaoCampanha' => $campanha->descricaoCampanha,
            'imagemCampanha' => $campanha->imagemCampanha,
        ]);
    }
}
    

