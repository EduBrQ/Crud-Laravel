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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/produtos', 'ProdutosController');
Route::get('/produtos/{id}/delete', 'ProdutosController@delete');

Route::resource('/servicos', 'ServicoController');
Route::get('/servicos/{id}/delete', 'ServicoController@delete');




