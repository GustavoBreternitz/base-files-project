<?php

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
Route::prefix('adm')->group(function () {
    Route::get('/login', 'HomeController@login')->name('adm.login');
    Route::post('/login/autenticar', 'HomeController@authenticate')->name('adm.login.autenticar');
});

Route::middleware(['auth'])->prefix('adm')->group(function () {
    // Rotas Home
    Route::get('/', 'HomeController@index')->name('adm.list.home');

    // Rotas Financeiro
    Route::get('/financeiro', 'FinanceiroController@index')->name('adm.list.financeiro');

    // Rotas Agenda
    Route::get('/agenda', 'AgendaController@index')->name('adm.list.agenda');

    // Rotas Usuarios
    Route::get('/usuario', 'UsuarioController@index')->name('adm.list.usuario');

    // Rotas Procedimentos
    Route::get('/procedimentos', 'ProcedimentosController@index')->name('adm.list.procedimentos');
    Route::post('/procedimentos/adicionar', 'ProcedimentosController@add')->name('adm.add.procedimentos');

});
