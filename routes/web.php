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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('sad-documento', 'DocumentosController', ['except' => ['show']]);
Route::resource('ubicaciones', 'UbicacionController');
Route::resource('tipo-documentos', 'TipoDocumentoController');
Route::post('sad-documento/indice', 'DocumentosController@gerenateIndice')->name('sad-documento.indice');
Route::get('sad-documento/generar-indice', 'DocumentosController@indice');




//Route::get('sad-documento/create',['as'=>'saddocumentos.create','uses'=>'SADocumentosController@create']);
//Route::post('sad-documento',['as'=>'saddocumentos.store','uses'=>'SADocumentosController@store']);

Route::post('upload',['as'=>'saddocumentos.upload','uses'=>'DocumentosController@addDocument']);

// Busqueda, de documents priorizados, con llamadas a backups
Route::get('sad-documento/busqueda/{numero?}/{ubicacion_id?}/{tomo?}','DocumentosController@find');
//busqueda
Route::get('tags/{nombre}','DocumentosController@findTags');
