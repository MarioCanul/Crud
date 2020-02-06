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
Route::get('/datos', 'DatostablaController@index');

//Route::get('/prueba', function () {
  //  return view('data');
//});
 

Route::get('/eliminar/{id}', 'DatostablaController@destroy');
Route::get('/modificar/{id}', 'DatostablaController@edit');
Route::post('/agregar', 'DatostablaController@store');
Route::post('/modificar/{id}', 'DatostablaController@update');
