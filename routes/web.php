<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\LoginController;
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
Route::get('/logindoador', [LoginController::class, 'showLoginForm'])->name('logindoador');
Route::post('/logindoador', [LoginController::class, 'logindoador']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*recuperação de senha*/
Route::get('/cod', function () {
    return view('codNovaSenha');
});

/*doador*/
// Rota para mostrar o formulário de cadastro do doador
Route::get('/cadastrodoador', [DoadorController::class, 'create'])->name('doador.create');

// Rota para armazenar os dados do doador
Route::post('/cadastrodoador', [DoadorController::class, 'store'])->name('doador.store');

// Rota para mostrar o formulário de criação de perfil do doador
Route::get('/criarperfildoador', [DoadorController::class, 'showCreateProfile'])->name('doador.createProfile');

// Rota para armazenar o perfil do doador
Route::post('/criarperfildoador', [DoadorController::class, 'storeProfile'])->name('doador.storeProfile');

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