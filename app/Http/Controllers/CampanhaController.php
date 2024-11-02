<?php

namespace App\Http\Controllers;

use App\Models\Campanha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampanhaController extends Controller
{
    public function index()
    {
        // Buscar todas as campanhas
        $campanhas = Campanha::all();
        // Remova o dd() antes de ir para produção
        // dd($campanhas);
        // Retornar a view com as campanhas
        return view('feedOng', compact('campanhas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomeCampanha' => 'required|string|max:100',
            'assuntoCampanha' => 'nullable|string|max:255',
            'descricaoCampanha' => 'required|string',
            'imagemCampanha' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dataInicioCampanha' => 'nullable|date',
            'dataFimCampanha' => 'nullable|date',
        ]);

        $campanha = new Campanha($request->except('imagemCampanha'));

        if ($request->hasFile('imagemCampanha')) {
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
        // Você pode usar findOrFail aqui, se preferir
        $campanha = Campanha::findOrFail($id);
        return response()->json($campanha);
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
    
        $campanha = Campanha::findOrFail($id);
    
        // Atualiza os dados da campanha
        $campanha->fill($request->except('imagemCampanha'));
    
        if ($request->hasFile('imagemCampanha')) {
            // Remove a imagem antiga se existir
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
    
    public function destroy($id)
    {
        $campanha = Campanha::find($id);
        if ($campanha) {
            $campanha->delete();
            return response()->json(['message' => 'Campanha excluída com sucesso!'], 200);
        } else {
            return response()->json(['message' => 'Campanha não encontrada.'], 404);
        }
    }
    
}
