<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Ong;
use App\Models\Adm;
use App\Models\Postagem;
use App\Models\Campanha;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método para exibir a página de login do doador/ONG
    public function showLoginForm()
    {
        return view('logindoador');
    }

    // Método para exibir a página de login do administrador
    public function showAdminLoginForm()
    {
        return view('loginAdm'); // Nome da view de login para o administrador
    }

    // Método para processar o login do doador ou da ONG
    public function logindoador(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Tenta autenticar como doador
        $doador = Doador::where('emailDoador', $credentials['email'])->first();
        if ($doador && $doador->senhaDoador === $credentials['password']) {
            Auth::login($doador); // Login do doador
            $campanhas = Campanha::with('ong')->get();
            $postagens = Postagem::with('ong')->get();
            return view('feedDoador', ['doador' => $doador, 'campanhas' => $campanhas, 'postagens' => $postagens]);
        }

        // Tenta autenticar como ONG
        $ong = Ong::where('emailOng', $credentials['email'])->first();
        if ($ong && $ong->senhaOng === $credentials['password']) {
            Auth::login($ong); // Login da ONG
            return redirect()->route('feedOng.index', ['idOng' => $ong->id]); // Redireciona com o ID da ONG
        }

        // Retorna com erro se as credenciais forem inválidas
        return back()->withErrors(['login' => 'Credenciais inválidas.'])->withInput();
    }

    // Método para processar o login do administrador
    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Verifica as credenciais do administrador
        if ($credentials['email'] === 'adm@gmail.com' && $credentials['password'] === '123adm') {
            Auth::loginUsingId(1); // Login como admin (ID específico)
            return redirect()->route('admin.dashboard'); // Redireciona para o dashboard admin
        }

        // Retorna com erro se as credenciais forem inválidas
        return back()->withErrors([
            'login' => 'Credenciais inválidas.',
        ])->withInput();
    }

    // Método para logout
    public function logout()
    {
        Auth::logout();
        return view('landingpage')->with('message', 'Logout realizado com sucesso!');
    }
}
