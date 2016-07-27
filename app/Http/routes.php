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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('inicio.inicio');
    });
/*
* INICIO DE CRUD DE ADMINISTRADOR
*/
Route::resource('admin', 'AdminController');
Route::get('admin/{id}/destroy',
	[
		'uses'	=> 'AdminController@destroy',
		'as'	=> 'admin.destroy'
	]);
/*
* INICIO DE CRUD DE EMPRESAS
*/

Route::resource('empre', 'EmpresasController');
Route::get('empre/{id}/destroy',
	[
		'uses'	=> 'EmpresasController@destroy',
		'as'	=> 'empre.destroy'
	]);

/*
* INICIO DE CRUD DE FACTURA
*/

Route::resource('factura', 'FacturaController');
Route::post('factura/cambiar',[
		'uses'	=> 'FacturaController@cambiarSelect',
		'as'	=> 'factura.cambiar'
	]);
Route::post('grabar',[
		'uses'	=>'GuardarFacturaController@store',
		'as'	=>'guardar.store'
	]);

Route::auth();

//Route::get('/ingresar', 'HomeController@index');

Route::get('/ingresar', [
	'uses' 	=> 'HomeController@index',
	'as'	=> 'index'
	]);
});