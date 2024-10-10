<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ong;
class adminController extends Controller
{
        public function store(Request $request)
        {
            // Validação
            $request->validate([
                'cnpj' => 'required|unique:ongs',
                'nome' => 'required',
                'endereco' => 'required',
                'email' => 'required|email',
            ]);
    
            // Criar registro sem autorização
            Ong::create($request->all());
    
            return redirect()->back()->with('success', 'Cadastro enviado para aprovação.');
        }
    
        public function authorizeOng($id)
        {
            $ong = Ong::findOrFail($id);
            $ong->autorizado = true;
            $ong->save();
    
            return redirect()->back()->with('success', 'Cadastro autorizado.');
        }
    
        public function index()
        {
            $ong = Ong::where('autorizado', false)->get();
            return view('ongs.index', compact('ongs'));
        }
    
    
}
