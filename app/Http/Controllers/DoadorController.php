<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use Illuminate\Http\Request;

class DoadorController extends Controller
{

    public function index() {
        $search = request('search');
        $doadores = $search ? Doador::where('nomeDoador', 'like', '%'.$search.'%')->get() : Doador::all();
        return view('doadoresView', ['doadores' => $doadores, 'search' => $search]);
    }

    public function search(Request $request) {
        $search = $request->input('query');
        $doadores = Doador::where('nomeDoador', 'like', '%'.$search.'%')->get();
        return response()->json($doadores);
    }

    public function destroy($id){
        $doador = Doador::find($id);
        $doador->delete();
        return redirect()->route('admin.doadores');
    }

    public function create()
    {
        return view('cadastrodoador'); 
    }

    // Método para armazenar os dados do doador (formulário 1)
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'nomeDoador' => 'required|string|max:100',
            'emailDoador' => 'required|email|max:255|unique:doador,emailDoador',
            'senhaDoador' => 'required|string|min:8',
        ]);

        // Criação do doador
        $doador = Doador::create([
            'nomeDoador' => $request->nomeDoador,
            'emailDoador' => $request->emailDoador,
            'senhaDoador' => ($request->senhaDoador), // Senha criptografada
            'dataCadastroDoador' => now(), // Preencher a data de cadastro automaticamente
        ]);

        // Armazenar o ID do doador na sessão
        $request->session()->put('doador_id', $doador->idDoador);

        // Redirecionar para o próximo formulário
        return redirect()->route('doador.createProfile');
    }

    // Método para mostrar o formulário de criação do perfil do doador (formulário 2)
    public function showCreateProfile()
    {
        return view('criarperfildoador'); // Altere para o nome correto da view
    }

    // Método para concluir o cadastro do doador
    public function storeProfile(Request $request)
    {
        // Validação dos dados do perfil
        $request->validate([
            'fotoDoador' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nomeUsuarioDoador' => 'required|string|max:100',
            'biografiaDoador' => 'required|string|max:255',
            'causas' => 'nullable|array',
        ]);

        // Lógica para armazenar a foto do doador se houver
        $path = null;
        if ($request->hasFile('fotoDoador')) {
            $path = $request->file('fotoDoador')->store('fotos_doador', 'public');
        }

        // Recupera o ID do doador da sessão
        $doadorId = $request->session()->get('doador_id');
        $doador = Doador::find($doadorId);

        // Verifica se o doador foi encontrado
        if (!$doador) {
            return redirect()->route('doador.create')->withErrors(['error' => 'Doador não encontrado.']);
        }

        // Atualiza os dados do doador com o perfil
        $doador->update([
            'fotoDoador' => $path,
            'nomeUsuarioDoador' => $request->nomeUsuarioDoador,
            'biografiaDoador' => $request->biografiaDoador,
            // Adicione outros campos conforme necessário
        ]);

        // Redireciona para uma página de sucesso ou onde você quiser
        return view('/logindoador'); // Altere para a rota de sucesso ou onde quiser redirecionar
    }
}
