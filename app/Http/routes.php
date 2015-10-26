<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rotas do Controller Campeonato
Route::get('/', 'CampeonatoController@index');
Route::get('/listaCamp', 'CampeonatoController@listar');
Route::post('/enviar', 'CampeonatoController@enviar');

//Rotas do Controller Categorias de Campeonato
Route::get('/cat', 'CategoriaController@index');
Route::get('/listaCat', 'CategoriaController@listar');
Route::post('/cadCat','CategoriaController@enviar');