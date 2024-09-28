<?php
namespace App\Http\Controllers;

use App\Models\Ong; // Certifique-se de que você tem o modelo Ong
use Illuminate\Http\Request;

class OngController extends Controller
{
    // Método para exibir o primeiro passo do cadastro da ONG
    public function showFirstStep()
    {
        return view('cadastroOng'); // Certifique-se de que a view existe
    }

    // Método para armazenar os dados do primeiro formulário
    public function storeFirstStep(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nomeOng' => 'required|string|max:255',
            'emailOng' => 'required|email|max:255|unique:ong,emailOng',
            'senhaOng' => 'required|string|min:8',
            'cnpjOng' => 'required|string|max:14', // Ajuste conforme necessário
            'cepOng' => 'nullable|string|max:10',
            'enderecoOng' => 'nullable|string|max:255',
            'numeroOng' => 'nullable|string|max:50',
            'complementoOng' => 'nullable|string|max:255',
            'bairroOng' => 'nullable|string|max:100',
            'cidadeOng' => 'nullable|string|max:100',
            'estadoOng' => 'nullable|string|max:50',
        ]);

        // Criação da nova ONG
        $ong = Ong::create([
            'nomeOng' => $validatedData['nomeOng'],
            'emailOng' => $validatedData['emailOng'],
            'senhaOng' => ($validatedData['senhaOng']), // Criptografando a senha
            'cnpjOng' => $validatedData['cnpjOng'],
            'cepOng' => $validatedData['cepOng'], // Corrigido para usar a validação
            'enderecoOng' => $validatedData['enderecoOng'], // Corrigido para usar a validação
            'numeroOng' => $validatedData['numeroOng'], // Corrigido para usar a validação
            'complementoOng' => $validatedData['complementoOng'], // Corrigido para usar a validação
            'bairroOng' => $validatedData['bairroOng'], // Corrigido para usar a validação
            'cidadeOng' => $validatedData['cidadeOng'], // Corrigido para usar a validação
            'estadoOng' => $validatedData['estadoOng'], // Corrigido para usar a validação
            'dataCadastroOng' => now(), // Preencher a data de cadastro automaticamente
        ]);

        $request->session()->put('ong_id', $ong->idOng);

        // Redirecionar para a configuração do perfil da ONG
        return view('configPerfilOng');
    }

    // Método para exibir a configuração do perfil da ONG
    public function showProfileConfig()
    {
        return view('configPerfilOng'); // Certifique-se de que a view existe
    }

    // Método para armazenar os dados do perfil da ONG
    public function storeProfileConfig(Request $request)
    {
        // Validação dos dados do perfil
        $validatedData = $request->validate([
            'fotoOng' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomeUsuarioOng' => 'required|string|max:255',
            'biografiaOng' => 'required|string|max:1000',
        ]);
    
        // Inicializa a variável de caminho da foto
        $path = null;
    
        // Verifica se existe um arquivo de foto
        if ($request->hasFile('fotoOng')) {
            $filename = time() . '.' . $request->fotoOng->extension(); // Cria um nome único para o arquivo
            $request->fotoOng->storeAs('uploads', $filename, 'public'); // Salva no diretório 'public/uploads'
            $path = $filename; // Atribui o nome do arquivo à variável path
        }
    
        // Recupera o ID do doador da sessão
        $ongId = $request->session()->get('ong_id');
        $ong = Ong::find($ongId);
    
        // Verifica se a ONG existe
        if (!$ong) {
            return redirect()->back()->with('error', 'ONG não encontrada.'); // Retorna um erro se a ONG não for encontrada
        }
    
        // Atualiza os dados da ONG
        $ong->update([
            'fotoOng' => $path, // Usa a variável path
            'nomeUsuarioOng' => $validatedData['nomeUsuarioOng'], // Corrigido para usar o nome correto
            'biografiaOng' => $validatedData['biografiaOng'], // Corrigido para usar o nome correto
            // Adicione outros campos conforme necessário
        ]);

        // Redirecionar ou retornar uma resposta após a atualização
        return view('logindoador');
    }
}
