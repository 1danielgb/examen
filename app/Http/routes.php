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

Route::get('/', function () {
    return view ('website.index');
});
get('/registrar',function(){
		return view('website.registrar');
	});
post('/mensaje', 'MensajesController@store');
get('/administrador/panel', 'AdministradorController@index');
get('/index','LoginController@index');

post('/login','LoginController@store');

Route::group(['middleware'=>'admin'], function (){
		get('/administrador', 'AdministradorController@index');
		get('/logout', 'AdministradorController@logout');
		get('/administrador/registrar-mascota','MascotaController@index');
		post('/mascota','MascotaController@store');
		get('/visual/{id}', 'MascotaController@show');
	});