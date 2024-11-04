<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ong;

class GeolocalizacaoController extends Controller
{
    // Método para exibir a página de geolocalização
    public function index()
    {
        return view('geolocalizacao');
    }

    // Método para buscar ONGs próximas ao CEP informado
    public function buscarOngs()
{
    try {
        // Teste básico para ver se a consulta está funcionando
        $ongs = Ong::select(['nomeOng', 'cepOng', 'latitude', 'longitude', 'biografiaOng'])->get();

        if ($ongs->isEmpty()) {
            return response()->json(['message' => 'Nenhuma ONG encontrada.'], 200);
        }

        return response()->json($ongs);
    } catch (\Exception $e) {
        \Log::error('Erro ao buscar ONGs: ' . $e->getMessage());
        return response()->json(['error' => 'Erro ao buscar ONGs'], 500);
    }
}
    
    
}
