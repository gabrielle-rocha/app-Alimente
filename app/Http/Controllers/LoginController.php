<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Ong;
use App\Models\Adm;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // Método para exibir a página de login do doador/ong
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

        $doador = Doador::where('emailDoador', $credentials['email'])->first();
        $ong = Ong::where('emailOng', $credentials['email'])->first();

        if ($doador && $doador->senhaDoador === $credentials['password']) {
            Auth::login($doador); // Login do doador
            return view('/feed2doador');
        } elseif ($ong && $ong->senhaOng === $credentials['password']) {
            Auth::login($ong); // Login da ONG
            return view('feedOng');
        }

        return back()->withErrors(['login' => 'Credenciais inválidas.'])->withInput();
    }

    // Método para processar o login do administrador
    public function loginAdmin(Request $request)
    {
        // Validação dos dados do formulário
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        // Verifica se o email é o do administrador
        if ($credentials['email'] === 'adm@gmail.com' && $credentials['password'] === '123adm') {
            // Login do administrador
            Auth::loginUsingId(1); // Você pode definir um ID específico ou outro método para identificar o admin
    
            // Redireciona para a dashboard do admin
            return redirect()->route('admin.dashboard'); // Aqui você deve redirecionar corretamente
        }
    
        // Se as credenciais forem inválidas, retorna um erro
        return back()->withErrors([
            'login' => 'Credenciais inválidas.',
        ])->withInput();
    }
    

    // Método para logout
    public function logout()
    {
        Auth::logout();
        session()->forget('isAdmin'); // Remove o login do admin da sessão
        return redirect()->route('logindoador');
    }
}
