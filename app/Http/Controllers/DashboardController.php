<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Ong;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $doadores = Doador::all()->count();
        $ong = Ong::all()->count();

        // Gráfico 1 = doadores
        $DoadorData = Doador::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total'),
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        // Inicializa arrays
        $ano = [];
        $total = [];

        // Popula arrays
        foreach ($DoadorData as $doador) {
            $ano[] = $doador->ano;
            $total[] = $doador->total;
        }

        // Formato chart
        $doadorLabel = "Comparativo de cadastros de Doadores";
        $doadorAno = implode(',', $ano);
        $doadorTotal = implode(',', $total);

        // Gráfico 2 = ongs
        $OngData = Ong::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total'),
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        // Inicializa arrays
        $anoOng = [];  // Inicializa a variável
        $totalOng = []; // Inicializa a variável

        // Popula arrays
        foreach ($OngData as $ongs) {
            $anoOng[] = $ongs->ano;
            $totalOng[] = $ongs->total;
        }

        // Formato chart
        $ongLabel = "Comparativo de cadastros de Ongs";
        $ongAno = implode(',', $anoOng);
        $ongTotal = implode(',', $totalOng);

        return view('feedAdm', compact('doadores', 'doadorLabel', 'doadorAno', 'doadorTotal', 'ong', 'ongLabel', 'ongAno', 'ongTotal'));
    }
}
