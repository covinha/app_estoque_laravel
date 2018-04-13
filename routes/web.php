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

Route::get('/', function () {
    return view('principal');




});


Route::get('/produtos/pesquisar', 'FuncionarioController@pesquisar')->middleware ('auth');
Route::post('/produtos/pesquisar', 'FuncionarioController@pesquisar')->middleware ('auth');
Route::get('/produtos/inserir', 'FuncionarioController@mostrar_inserir')->middleware ('auth');
Route::post('/produtos/inserir', 'FuncionarioController@inserir')->middleware ('auth');
Route::get('/produtos/alterar/{id}', 'FuncionarioController@mostrar_alterar')->middleware ('auth');
Route::post('/produtos/alterar', 'FuncionarioController@alterar')->middleware ('auth');
Route::get('/produtos/excluir/{id}', 'FuncionarioController@excluir')->middleware ('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
