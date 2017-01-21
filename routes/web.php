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


Route::get("archivos","ArchivosController@view");
Route::post("archivos","ArchivosController@guardarArchivos");




Route::get("search","DocumentoController@view");
Route::get("users","UsersController@view");
Route::get("admUser","AdminController@ViewAdmUser");
Route::get('unidades/{id}','RecepcionController@getUnidad');


// RUTAS SUBIR DOCUMENTOS------------------------------------------------
Route::get('subirdoc','RecepcionController@view');
Route::post('subirdoc','RecepcionController@store');
Route::post('subirdoc','RecepcionController@guardarArchivos');



// ----------------------------------------------------------------------


// RUTAS CRUD UNIDADES---------------------------------------------------
Route::get('crudUnidades','UnidadesController@view');
Route::get('createUnidades','UnidadesController@create');
Route::post('crudUnidades', 'UnidadesController@store');
Route::delete('crudUnidades/{id}','UnidadesController@destroy');
Route::post('crudUnidades/edit/{id}', 'UnidadesController@edit');
Route::put('crudUnidades/{id}', 'UnidadesController@update');
// ----------------------------------------------------------------------


// RUTAS CRUD DEPARTAMENTOS----------------------------------------------
Route::get('crudDepartamentos','DepartamentosController@view');
Route::get('createDepartamentos','DepartamentosController@create');
Route::post('crudDepartamentos', 'DepartamentosController@store');
Route::delete('crudDepartamentos/{id}','DepartamentosController@destroy');
Route::post('crudDepartamentos/edit/{id}', 'DepartamentosController@edit');
Route::put('crudDepartamentos/{id}', 'DepartamentosController@update');
// ----------------------------------------------------------------------





Route::get('perfil','PerfilController@view');
Route::post('perfil','PerfilController@updateProfile');
Route::get('plan','AdminController@plan');
Route::post('home/create', 'StorageController@save');





Auth::routes();

Route::get('/home', 'HomeController@index');
