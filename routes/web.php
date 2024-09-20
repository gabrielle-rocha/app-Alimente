<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/criarperfildoador', function () {
    return view('criarperfildoador');
});

Route::get('/', function () {
    return view('logindoador');
});

Route::get('/criarcontadoador', function () {
    return view('criarcontadoador');
});

Route::get('/cadastrodoador', function () {
    return view('cadastrodoador');
});

Route::get('/autenticacao', function () {
    return view('autenticacao');
});

Route::get('/feedOng', function () {
    return view('feedOng');
});

//Route::get('/doador','App/http/');