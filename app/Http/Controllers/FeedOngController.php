<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Models\Campanha;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeedOngController extends Controller
{
    
    public function index()
{
    if (Auth::check() && Auth::user()->idOng) {
        $ongId = Auth::user()->idOng;

        // Recupera a ONG associada ao usuário autenticado
        $ong = Ong::find($ongId);

        // Busca campanhas associadas a essa ONG
        $campanhas = Campanha::where('idOng', $ongId)->get();

        return view('feedOng', compact('campanhas', 'ong'));
    } else {
        return redirect()->route('logindoador')->withErrors('Você precisa estar logado para ver suas postagens.');
    }
}

    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'nomeCampanha' => 'required|string|max:100',
            'assuntoCampanha' => 'nullable|string|max:255',
            'descricaoCampanha' => 'required|string',
            'imagemCampanha' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dataInicioCampanha' => 'nullable|date',
            'dataFimCampanha' => 'nullable|date',
        ]);
    
        // Verifica se a campanha pertence à ONG autenticada
        $campanha = Campanha::where('idOng', Auth::user()->idOng)->find($id);
    
        if (!$campanha) {
            return response()->json(['error' => 'Campanha não encontrada ou não pertence à sua ONG'], 404);
        }
    
        // Atualiza os dados da campanha
        $campanha->fill($request->except('imagemCampanha'));
    
        if ($request->hasFile('imagemCampanha')) {
            // Exclui a imagem antiga, se existir
            if ($campanha->imagemCampanha) {
                Storage::disk('public')->delete($campanha->imagemCampanha);
            }
            // Armazena a nova imagem
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

    public function show($id)
    {
        $campanha = Campanha::find($id);
        if (!$campanha) {
            return response()->json(['error' => 'Campanha não encontrada'], 404);
        }
        return response()->json($campanha);
    }    
    
    public function destroy($id)
    {
        // Verifica se a campanha pertence à ONG autenticada
        $campanha = Campanha::where('idOng', Auth::user()->idOng)->find($id);
    
        if (!$campanha) {
            return response()->json(['error' => 'Campanha não encontrada ou não pertence à sua ONG'], 404);
        }
    
        // Exclui a campanha
        $campanha->delete();
    
        return response()->json(['message' => 'Campanha excluída com sucesso!']);
    }    

}
    

