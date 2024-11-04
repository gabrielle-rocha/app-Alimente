<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckDoadorSession
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('idDoador')) {
            return redirect()->route('logindoador')->withErrors('Por favor, faça login para acessar o perfil.');
        }

        return $next($request);
    }
}
