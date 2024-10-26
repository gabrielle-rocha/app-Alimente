<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapController extends Controller
{
    public function index(Request $request)
    {
        $userCep = $request->input('cep');
        
        $ongs = Ong::where('cepOng', $userCep)->get();

        // Obtém coordenadas caso estejam ausentes
        foreach ($ongs as $ong) {
            if (is_null($ong->latitude) || is_null($ong->longitude)) {
                $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
                    'address' => $ong->cepOng,
                    'key' => env('GOOGLE_MAPS_API_KEY'),
                ]);
                $data = $response->json();

                if (!empty($data['results'])) {
                    $ong->latitude = $data['results'][0]['geometry']['location']['lat'];
                    $ong->longitude = $data['results'][0]['geometry']['location']['lng'];
                    $ong->save();
                }
            }
        }

        return view('geo', compact('ongs'));
    }
}
