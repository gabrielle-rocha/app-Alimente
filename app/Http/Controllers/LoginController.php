<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Ong;
use Illuminate\Support\Facades;

class LoginController extends Controller
{
    // Método para exibir a página de login
    public function showLoginForm()
    {
        return view('logindoador');
    }

    // Método para processar o login do doador ou da ONG
    public function logindoador(Request $request)
    {
        // Validação dos dados do formulário
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Verifica se o email pertence a um doador
        $doador = Doador::where('emailDoador', $credentials['email'])->first();

        // Verifica se o email pertence a uma ONG
        $ong = Ong::where('emailOng', $credentials['email'])->first();

        // Lógica para verificar a senha e logar o doador ou a ONG
        if ($doador && $doador->senhaDoador === $credentials['password']) {
            // Loga o doador
            Auth::login($doador);

            // Redireciona o doador para o dashboard
            return redirect()->route('/feed2doador');
        } elseif ($ong && $ong->senhaOng === $credentials['password']) {
            // Loga a ONG
            Auth::login($ong);

            // Redireciona a ONG para o dashboard
            return redirect()->route('dashboardong');
        }

        // Se as credenciais forem inválidas, retorna um erro
        return back()->withErrors([
            'email' => 'Credenciais inválidas',
        ])->withInput();
    }

    // Método para logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('logindoador');
    }
}
