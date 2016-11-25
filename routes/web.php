<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/main', function () {
    return view('main');
});
Route::get('/',[
			'as' 	=> 'nueva.hoja',
			'uses' 	=> 'ServicosController@create'
	 	]);
Route::get('/tecnicos',[
			'as' 	=> 'hojatecnicos',
			'uses' 	=> 'TecnicosController@create'
	 	]);

Route::get('/clientes',[
			'as' 	=> 'hojacliente',
			'uses' 	=> 'ClientesController@create'
	 	]);