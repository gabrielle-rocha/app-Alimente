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

// Rota para processar o login do doador
Route::post('/logindoador', [LoginController::class, 'logindoador'])->name('logindoador.post');

// Rota para logout
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

Route::get('/feed2doador', function() {
    return view('feed2doador');
})->name('feed2doador');

Route::get('/editarperfildoador', function () {
    return view('editarperfildoador');
});

/*Ong*/
Route::get('/cadastroOng', [OngController::class, 'showFirstStep'])->name('ong.cadastro');
Route::post('/cadastroOng', [OngController::class, 'storeFirstStep'])->name('ong.store.first');

// Adicione a rota para o segundo formulário, se necessário
Route::get('/configPerfilOng', [OngController::class, 'showProfileConfig'])->name('ong.config.perfil');
Route::post('/configPerfilOng', [OngController::class, 'storeProfileConfig'])->name('ong.store.perfil');

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

/*adm*/
Route::get('/adm', function () {
    return view('loginAdm');
});
?>