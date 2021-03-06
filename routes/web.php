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

// Route::get('/datos', function () {
//     return view('datos');
// });
Route::get('/datos/reporte', 'ReporteGastoController@index');
Route::get('/datos/reporte/eliminarD/{id}', 'ReporteGastoController@destroy');
Route::get('/datos/reporte/modificarD/{id}', 'ReporteGastoController@edit');
Route::post('/datos/reporte/agregarD', 'ReporteGastoController@store');
Route::post('/datos/reporte/modificarD/{id}', 'ReporteGastoController@update');
 Route::get('/datos/reporte/Detalles/{id}', 'ReporteGastoController@show');

 Route::get('/datos/DetallesCompras/{id}', 'ReporteGastoController@DetallesComp');

Route::get('/datos', 'DatostablaController@index');
Route::get('/datos/eliminar/{id}', 'DatostablaController@destroy');
Route::get('/datos/modificar/{id}', 'DatostablaController@edit');
Route::post('/datos/agregar', 'DatostablaController@store');
Route::post('datos/modificar/{id}', 'DatostablaController@update');

Auth::routes();


