<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/produtos', 'ProdutosController');
Route::get('/produtos/{id}/delete', 'ProdutosController@delete');

Route::resource('/servicos', 'ServicoController');
Route::get('/servicos/{id}/delete', 'ServicoController@delete');

Route::resource('/colecoes', 'ColecaoRevistasController');
Route::get('/colecoes/{id}/delete', 'ColecaoRevistasController@delete');



