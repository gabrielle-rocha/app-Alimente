<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OngModel;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ongs = OngModel::all();

        foreach ($ongs as $o) {
            echo $o->idOng;
            echo $o->nomeOng;
            echo $o->cnpjOng;
            echo $o->emailOng;
            echo $o->nomeResponsavelOng;
            echo $o->senhaOng;
            echo $o->fotoOng;
            echo $o->nomeUsuarioOng;
        }
    }

    // Adicione outros métodos (create, store, show, edit, update, destroy) conforme necessário
}
