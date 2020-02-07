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
Route::get('/reporte', 'ReporteGastoController@index');
Route::get('/eliminarD/{id}', 'ReporteGastoController@destroy');
Route::get('/modificarD/{id}', 'ReporteGastoController@edit');
Route::post('/agregarD', 'ReporteGastoController@store');
Route::post('/modificarD/{id}', 'ReporteGastoController@update');
Route::get('/Detalles/{id}', 'ReporteGastoController@show');





Route::get('/VerRep/{id}', 'ReporteGastoController@show');

Route::get('/datos', 'DatostablaController@index');
Route::get('/datos/eliminar/{id}', 'DatostablaController@destroy');
Route::get('/datos/modificar/{id}', 'DatostablaController@edit');
Route::post('/datos/agregar', 'DatostablaController@store');
Route::post('datos/modificar/{id}', 'DatostablaController@update');
