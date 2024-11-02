<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\FeedOngController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\GeolocalizacaoController;

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
//Route::get('/password-reset', [PasswordResetController::class, 'showEmailForm'])->name('password.reset');
//Route::post('/password-reset', [PasswordResetController::class, 'sendResetCode']);
//Route::get('/password-reset/code', [PasswordResetController::class, 'showCodeForm'])->name('password.reset.code');
//Route::post('/password-reset/code', [PasswordResetController::class, 'verifyCode']);
//Route::get('/password-reset/change', [PasswordResetController::class, 'showChangePasswordForm'])->name('password.reset.change');
//Route::post('/password-reset/change', [PasswordResetController::class, 'changePassword']);

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

//rotas geolocalizaçao
Route::get('/geolocalizacao', [GeolocalizacaoController::class, 'index'])->name('geolocalizacao.index');
Route::get('/geolocalizacao/buscar', [GeolocalizacaoController::class, 'buscar'])->name('geolocalizacao.buscar');
//Route::get('/geo', [MapController::class, 'index'])->name('mapa.index');

/*feed ong*/
Route::middleware('auth')->group(function () {
    Route::get('/feedOng', [FeedOngController::class, 'index'])->name('feedOng.index');
    Route::put('/feedOng/{id}', [FeedOngController::class, 'update'])->name('feedOng.update');
    Route::get('/feedOng/{id}', [FeedOngController::class, 'show'])->name('feedOng.show');
    Route::delete('/feedOng/{id}', [FeedOngController::class, 'destroy'])->name('feedOng.destroy');
});

Route::get('/perfilOng', function() {
    return view('perfilOng');
});

Route::get('/prestarContaOng', function() {
    return view('prestarContaOng');
});

// Rotas para campanhas
Route::middleware('auth')->group(function () {
    // Rota para exibir todas as campanhas
    Route::get('/campanhas', [CampanhaController::class, 'index'])->name('campanha.index');

    // Rota para armazenar uma nova campanha
    Route::post('/campanha', [CampanhaController::class, 'store'])->name('campanha.store');

    // Rota para mostrar os detalhes de uma campanha específica
    Route::get('/campanha/{id}', [CampanhaController::class, 'show'])->name('campanha.show');

    // Rota para atualizar uma campanha existente
    Route::put('/campanha/{id}', [CampanhaController::class, 'update']);

    // Rota para excluir uma campanha (opcional)
    // Para rotas de API
    Route::delete('/campanha/{id}', [CampanhaController::class, 'destroy']); // Certifique-se de que esta linha está aqui

});


/* Rotas para login

// Página de Registro
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Página de Redefinição de Senha
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Rota para o dashboard após o login
Route::get('dashboard', function () {
    return view('dashboard'); // Certifique-se de ter essa view criada
})->middleware('auth');
Auth::routes();*/