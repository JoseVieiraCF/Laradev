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

Route::get('/imoveis', 'PropertyController@index');

Route::get('/imoveis/new','PropertyController@create');
Route::post('/imoveis/store','PropertyController@store');
Route::get('/imoveis/{name}', 'PropertyController@show');

Route::get('/imoveis/edit/{name}','PropertyController@edit');
Route::put('/imoveis/update/{name}', 'PropertyController@update');

Route::get('/imoveis/delete/{name}', 'PropertyController@destroy');



