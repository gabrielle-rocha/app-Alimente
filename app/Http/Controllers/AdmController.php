<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    //


      /**
 * Autorização de login
 */
public function login(Request $request)
{ 
    //verificar se o usualio e uma ong
    $ong = Ong::where('emailOng',$request->email)->first();

    if ($ong){
        $isPasswordValid = Hash::check($request->senha,$ong->senhaOng);

        if ($isPasswordValid && $ong-->statusPrestacaoContas ==='ativo'){
            $token = $ong->createToken('Ong') ->plainTextToken;
            return response()->json([
                'message' => 'Autentificado como Ong com sucesso!',
                'token' => $token,
                'tipoUsuario' => 'ong'
            
            ], 200 );
        }else if ($ong->statusPrestacaoContas ==='pendente'){
            return response()->json(['message'=> 'Ong pendente!'], 401);
        }else if ($ong->statusPrestacaoContas === 'arquivado'){
            return response ()->json(['message' =>'Ong arquivada!'], 401);
        }else {
            return response ()->json(['mensagem'=>'Credencías inválidas!'], 401);
        }
    }
}

}
