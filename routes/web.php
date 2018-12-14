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
    return view('home');
});


Route::get('/fire', function () {
    event(new ColetaStatusChanged);
    return 'Fired';
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/coleta', function () {
    return view('coleta');
});

Route::get('/obrigado', function () {
    return view('obrigado');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/home/enviar', 'MensagensController@enviar');
Route::post('/coleta/requisitar', 'ColetasController@requisitar');
Route::post('/coleta/store', 'ColetasController@store');
Route::post('/listcoletas', 'ColetasController@getColetas');
Route::post('/search', 'ColetasController@search');
Route::get('/listmensagens', 'MensagensController@getMensagens');
