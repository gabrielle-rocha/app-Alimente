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
    public function buscar(Request $request)
    {
        try {
            $cep = $request->input('cep');
            $ongs = Ong::where('cepOng', 'LIKE', "{$cep}%")->get();
    
            return response()->json($ongs);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao buscar ONGs.'], 500);
        }
    }
    
}
