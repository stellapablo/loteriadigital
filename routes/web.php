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

Route::resource('sad-documento', 'SADocumentosController');
Route::resource('ubicaciones', 'UbicacionController');
Route::resource('tipo-documentos', 'TipoDocumentoController');



//Route::get('sad-documento/create',['as'=>'saddocumentos.create','uses'=>'SADocumentosController@create']);
//Route::post('sad-documento',['as'=>'saddocumentos.store','uses'=>'SADocumentosController@store']);

Route::post('upload',['as'=>'saddocumentos.upload','uses'=>'SADocumentosController@addDocument']);
Route::get('sad-documento/{sadocumento}/edit',['as'=>'saddocumentos.edit','uses'=>'SADocumentosController@edit']);

