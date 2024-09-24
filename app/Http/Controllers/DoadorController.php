<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoadorModel;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doadores = DoadorModel::all();

        foreach($doadores as $d){
            echo $d->idDoador;
            echo $d->nomeDoador;
            echo $d->emailDoador;
            echo $d->senhaDoador;
            echo $d->fotoDoador;
            echo $d->quantidadeDoacoes;
            echo $d->quantidadeOngsSeguidas;
            echo $d->quantidadeCurtidasDoador;
            echo $d->enderecoDoador;
            echo $d->numeroDoador;
            echo $d->complementoDoador;
            echo $d->cepDoador;
            echo $d->bairroDoador;
            echo $d->cidadeDoador;
            echo $d->estadoDoador;
            echo $d->causasPreferidasDoador;
            echo $d->dataCadastroDoador;
            echo $d->denunciasRealizadasDoador;
        }
    }

    public function exibirDoadores(){
        $doadores = DoadorModel::all();

        //$doadores = DoadorModel::where('idDoador',1)->get();

        //$doadores = DoadorModel::where('idDoador', '<=', 2)->get();

        //$doadores = DoadorModel::where('idDoador', '>=', 1)->orderBy('nomeDoador', 'asc')->get();

        //$doadores = DoadorModel::where('nomeDoador', 'paulo')->get();
        return view('doadoresView', compact('doadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doador = new DoadorModel();

        $doador->nomeDoador = $request->txNomeDoador; 
        $doador->save();

        return redirect()->action('App\http\Controllers\DoadorController@exibirDoadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doadores = DoadorModel::where('idDoador', $id)->delete();
        return redirect()->action('App\http\Controllers\DoadorController@exibirDoadores');
    }
}
