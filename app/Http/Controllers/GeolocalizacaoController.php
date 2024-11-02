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
        $cep = $request->input('cep');
        
        // Consulta ONGs próximas ao CEP (ajuste de acordo com sua lógica de proximidade)
        $ongs = Ong::where('cep', 'LIKE', "{$cep}%")->get();

        // Retorna os dados em formato JSON para o front-end
        return response()->json($ongs);
    }
}
