<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DoadorAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se há um ID de doador na sessão
        if (!$request->session()->has('idDoador')) {
            // Redireciona para a página de login do doador com a mensagem de erro
            return redirect()->route('logindoador')->withErrors(['Por favor, faça login para acessar o perfil.']);
        }

        return $next($request);
    }
}
