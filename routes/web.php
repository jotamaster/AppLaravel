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




Route::get("search","DocumentoController@view");
Route::get("users","UsersController@view");
Route::get("admUser","AdminController@ViewAdmUser");
Route::get('unidades/{id}','RecepcionController@getUnidad');
Route::get('subirdoc','RecepcionController@view');
Route::get('crudUnidades','UnidadesController@view');
Route::get('crudDepartamentos','DepartamentosController@view');
Route::get('createDepartamentos','DepartamentosController@create');
Route::post('crudDepartamentos', 'DepartamentosController@store');
Route::get('perfil','PerfilController@view');
Route::post('perfil','PerfilController@updateProfile');
Route::get('plan','AdminController@plan');
Route::post('home/create', 'StorageController@save');




Auth::routes();

Route::get('/home', 'HomeController@index');
