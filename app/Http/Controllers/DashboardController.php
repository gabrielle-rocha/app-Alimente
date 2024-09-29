<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Ong;

class DashboardController extends Controller
{
    public function index(){

        $doador = Doador::all()->count();
        $ong = Ong::all()->count();
        return view('feedAdm', compact('doador'), compact('ong'));

        
    }
}
