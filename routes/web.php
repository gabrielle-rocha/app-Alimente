<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\ImageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/splash', function () {
    return view('splash');
});

Route::get('/', function () {
    return view('telaInicio');
});

/*login-geral*/
Route::get('/logindoador', function () {
    return view('logindoador');
});

/*recuperação de senha*/
Route::get('/cod', function () {
    return view('codNovaSenha');
});

/*doador*/
Route::get('/criarperfildoador/{id}', [DoadorController::class, 'createProfile'])->name('criar.perfil');
Route::post('/criarperfildoador/{id}', [DoadorController::class, 'createProfile'])->name('criar.perfil');


Route::get('/cadastrodoador', 'App\Http\Controllers\DoadorController@create');
Route::post('/cadastrodoador', 'App\Http\Controllers\DoadorController@store');


Route::get('/cadastrodoador', 'App\Http\Controllers\DoadorController@create');
Route::post('/cadastrodoador', 'App\Http\Controllers\DoadorController@store');

Route::get('/feed2doador', function () {
    return view('feed2doador');
});

Route::get('/editarperfildoador', function () {
    return view('editarperfildoador');
});

/*Ong*/
Route::get('/cadastroOng', function () {
    return view('cadastroOng');
});

Route::get('/configPerfilOng', function () {
    return view('configPerfilOng');
});

Route::get('/criarContaOng', function () {
    return view('criarContaOng');
});

Route::get('/analiseOng', function () {
    return view('analiseOng');
});

Route::get('/feedOng', function () {
    return view('feedOng');
});


/*banco*/
Route::get('/doador','App\http\Controllers\DoadorController@index');

Route::get('/ong','App\http\Controllers\OngController@index');

Route::get('/doadores-view', 'App\http\Controllers\DoadorController@exibirDoadores');

Route::get('/doadores-view/{id}', 'App\http\Controllers\DoadorController@destroy');

Route::post('doador/inserir', 'App\http\Controllers\DoadorController@store');

// Rotas para OngController
Route::resource('ongs', OngController::class);

// Rota para upload de imagem

Route::resource('ongs', OngController::class);
Route::post('/upload-imagem', [ImageController::class, 'store'])->name('uploadImagem1');

/*adm*/
Route::get('/adm', function () {
    return view('loginAdm');
});
?>