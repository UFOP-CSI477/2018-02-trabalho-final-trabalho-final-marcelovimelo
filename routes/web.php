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

Route::middleware('auth')->group(function () {
    Route::post('/coleta/store', 'ColetasController@store');
    Route::post('/coleta/requisitar', 'ColetasController@requisitar');
});


Route::post('/home/enviar', 'MensagensController@enviar');
