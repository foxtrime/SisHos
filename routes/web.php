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
    return view('auth/login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::resource('unidade',               'UnidadeController');
Route::resource('especializacao',        'EspecializacaoController');
Route::resource('unidadeespecializacao', 'UnidadeEspecializacaoController');

Route::get('getUnidades', 				'UnidadeEspecializacaoController@getUnidades');
Route::get('getDados/{u}',    		'UnidadeEspecializacaoController@getDados');
Route::get('getEspecialidades/{u}',	'UnidadeEspecializacaoController@getEspecialidades');

