<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\adminController;

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

Route::get('/', function () {
    return view('landingPage');
});

/*login-geral*/
Route::get('/logindoador', [LoginController::class, 'showLoginForm'])->name('logindoador');

// Rota para processar o login do doador
Route::post('/logindoador', [LoginController::class, 'logindoador'])->name('logindoador.post');

// Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//login doador
// Rota para exibir o formulário de login do administrador
Route::get('/loginAdm', [LoginController::class, 'showAdminLoginForm'])->name('admin.login.form');

// Rota para processar o login do administrador
Route::post('/loginAdm', [LoginController::class, 'loginAdmin'])->name('admin.login');

// Rota para a dashboard do administrador
Route::get('/adm', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/adm/doadores', [DoadorController::class, 'index'])->name('admin.doadores');
Route::get('/adm/ongs', [OngController::class, 'index'])->name('admin.ongs');
Route::delete('/adm/doadores/delete{id}', [DoadorController::class, 'destroy'])->name('admin.doadores.delete');
//admin autorização
Route::post('/adm/ongs/store', [adminController::class, 'store'])->name('admin.ongs.store');

Route::delete('/adm/ongs/delete{id}', [OngController::class, 'destroy'])->name('admin.ongs.delete');
Route::get('/doadores/search', [DoadorController::class, 'search'])->name('doadores.search');
Route::get('/ongs/search', [OngController::class, 'search'])->name('ongs.search');

/*doador cadastro*/
// Rota para mostrar o formulário de cadastro do doador
Route::get('/cadastrodoador', [DoadorController::class, 'create'])->name('doador.create');

// Rota para armazenar os dados do doador
Route::post('/cadastrodoador', [DoadorController::class, 'store'])->name('doador.store');

// Rota para mostrar o formulário de criação de perfil do doador
Route::get('/criarperfildoador', [DoadorController::class, 'showCreateProfile'])->name('doador.createProfile');

// Rota para armazenar o perfil do doador
Route::post('/criarperfildoador', [DoadorController::class, 'storeProfile'])->name('doador.storeProfile');


/*Ong cadastro*/
Route::get('/cadastroOng', [OngController::class, 'showFirstStep'])->name('ong.cadastro');
Route::post('/cadastroOng', [OngController::class, 'storeFirstStep'])->name('ong.store.first');

// Adicione a rota para o segundo formulário, se necessário
Route::get('/configPerfilOng', [OngController::class, 'showProfileConfig'])->name('ong.config.perfil');
Route::post('/configPerfilOng', [OngController::class, 'storeProfileConfig'])->name('ong.store.perfil');

Route::get('/analiseOng', function () {
    return view('analiseOng');
});

/*banco*/
Route::get('/doador','App\http\Controllers\DoadorController@index');

Route::get('/ong','App\http\Controllers\OngController@index');

Route::get('/ongs-view', function() {
    return view('ongsView');
});

/* Recuperação de senha */
Route::get('/password-reset', [PasswordResetController::class, 'showEmailForm'])->name('password.reset');
Route::post('/password-reset', [PasswordResetController::class, 'sendResetCode']);
Route::get('/password-reset/code', [PasswordResetController::class, 'showCodeForm'])->name('password.reset.code');
Route::post('/password-reset/code', [PasswordResetController::class, 'verifyCode']);
Route::get('/password-reset/change', [PasswordResetController::class, 'showChangePasswordForm'])->name('password.reset.change');
Route::post('/password-reset/change', [PasswordResetController::class, 'changePassword']);

/*Autorização do adm para ong */
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::post('/admin', [adminController::class, 'store'])->name('admin.store');
Route::post('/admin/authorize/{id}', [adminController::class, 'authorizeOng'])->name('admin.ongs.authorize');


Route::get('/admin', function() {
    return view('admin');
});

/*feed doador*/ 
Route::get('/feedDoador', function() {
    return view('feedDoador');
});

Route::get('/perfilDoador', function() {
    return view('perfilDoador');
});

Route::get('/busca-ongs', [OngController::class, 'buscar']);

Route::get('/ongs', [OngController::class, 'apiBuscar']);

/*feed ong*/
Route::get('/feedOng', function() {
    return view('feedOng');
});

Route::get('/perfilOng', function() {
    return view('perfilOng');
});

Route::get('/prestarContaOng', function() {
    return view('prestarContaOng');
});