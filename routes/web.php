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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/listarbd', 'ListabdController@index');
Route::resource('/getoc', 'ObtenerOCController');
Route::resource('/cliente', 'ClienteController');
Route::resource('/cliente/contacto', 'ClienteContactoController');
Route::Resource('/producto', 'ProductoController');
Route::Resource('/facturar', 'FacturarController');
