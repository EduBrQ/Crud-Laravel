<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/produtos', 'ProdutosController');
    Route::get('/produtos/{id}/delete', 'ProdutosController@delete');

//COLEÇÕES
    Route::resource('/colecoes', 'ColecaoRevistasController');
    Route::get('/colecoes/{id}/delete', 'ColecaoRevistasController@delete');
    Route::get('/colecoes/{id}/titulos', 'ColecaoRevistasController@titulos');

//TÍTULOS
    Route::resource('/titulos', 'TituloController');
    Route::get('/titulos/create/{id}', 'TituloController@create');
    Route::get('/titulos/{id}/delete', 'TituloController@delete');

//EMPRESTIMOS
    Route::resource('/emprestimos', 'EmprestimoController');
    Route::get('/emprestimos/create/{id}', 'EmprestimoController@create');
    Route::get('/emprestimos/{id}/delete', 'EmprestimoController@delete');
});