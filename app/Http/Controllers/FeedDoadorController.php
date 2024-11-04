<?php

// app/Http/Controllers/FeedDoadorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doador;
use App\Models\Ong;
use App\Models\Campanha;
use App\Models\Postagem;

class FeedDoadorController extends Controller
{
    public function index()
    {
        $doador = auth()->user(); // Obtém o usuário autenticado
        // Busca todas as campanhas, incluindo as informações das ONGs
        $campanhas = Campanha::with('ong')->orderBy('created_at', 'desc')->get(); // Certifique-se de que o relacionamento está definido
        $postagens = Postagem::with('ong')->orderBy('dataPostagem', 'desc')->get();
        
         // Retornar a view com o doador, campanhas e postagens
         return view('feedDoador', compact('doador', 'campanhas', 'postagens'));
    }
}
