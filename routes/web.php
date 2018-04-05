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

Route::get('/','InicioController@index');
Route::get('home','InicioController@index')->name('home');
Route::resource('registro','RegistroController');

Route::get('carga','RegistroController@cargamunicipios');
Route::get('ciudad','RegistroController@cargaciudades');

Route::post('envio','RegistroController@envio');
Route::get('buscar','RegistroController@buscar');
Route::get('registro.contacto', [
        'uses' => 'RegistroController@contacto',
        'as'   => 'contacto'
    ]);
Route::post('registro.envio', [
        'uses' => 'RegistroController@envio',
        'as'   => 'envio'
    ]);
Route::get('vista','RegistroController@vista');
Route::get('reporte','RegistroController@reporte');
Route::get('enviar','RegistroController@Enviar_excel');
