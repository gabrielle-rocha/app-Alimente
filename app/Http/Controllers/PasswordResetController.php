<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class PasswordResetController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('autenticacao'); 
    }

    public function showEmailForm()
    {
        return view('codNovaSenha');
    }

    public function sendResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:doador,emailDoador',
        ]);

        $code = rand(1000, 9999);
        Session::put('reset_code', $code);
        Session::put('email', $request->email);

        Log::info('Código gerado e armazenado na sessão: ' . $code); // Log do código gerado

        // Enviar o código por e-mail
        Mail::raw("Seu código de redefinição de senha é: $code", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Código de Redefinição de Senha');
        });

        return redirect()->route('password.reset.code')->with('success', 'Código enviado para seu e-mail.');
    }

    public function showCodeForm()
    {
        return view('cod');
    }

    public function verifyCode(Request $request)
{
    $request->validate([
        'code' => 'required|string|size:4', // Valida se a string tem exatamente 4 caracteres
    ]);

    $inputCode = $request->code;
    $sessionCode = Session::get('reset_code');

    Log::info('Código inserido: ' . $inputCode);
    Log::info('Código da sessão: ' . $sessionCode);

    if ($inputCode !== $sessionCode) {
        return back()->withErrors(['code' => 'O código inserido está incorreto.']);
    }

    echo '$inputCode';

   // return redirect()->route('password.reset.change')->with('success', 'Código verificado com sucesso. Por favor, redefina sua senha.');
}


public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);

        $email = Session::get('email');
        $doador = Doador::where('emailDoador', $email)->first();

        if (!$doador) {
            return back()->withErrors(['email' => 'Usuário não encontrado.']);
        }

        $doador->update([
            'senhaDoador' => Hash::make($request->password),
        ]);

        // Limpar a sessão
        Session::forget(['reset_code', 'email']);

        // Redirecionar para a tela de login de doador com uma mensagem de sucesso
        return redirect()->route('logindoador')->with('success', 'Senha alterada com sucesso! Você pode fazer login agora.');
    }
}
