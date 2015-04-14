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

Route::get('/', 'WelcomeController@index');

//esta route son especificamente para subir y descargar archivos de el role de alumnos//
Route::get('descarga', 'DescargaController@index');
Route::get('descarga/create', 'DescargaController@create');

//Aqui estan las rutas para subir los archivos y descargarlos//
Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/create', 'FileEntryController@create');
Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add', ['as' => 'addentry', 'uses' => 'FileEntryController@add']);


//Estan son las rutas resource para cada role que hay en la aplicacion//
Route::resource('alumnos', 'EstudianteController');
Route::resource('profesor', 'ProfesorController');
Route::resource('permiso', 'PermisosController');
Route::resource('role', 'RoleController');
Route::resource('admin', 'AdminController');
Route::get('home', 'HomeController@index');

//Aqui estan las routas del login de la aplicacion//
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




