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

Route::get('/', 'Controller@registro' );
Route::post('store_user', 'UsuarioController@store' );
Route::post('autenticar_user', 'UsuarioController@get' );
Route::get('principal', 'Controller@principal');
Route::get('login', 'Controller@login');
Route::get('registro', 'Controller@registro');

#Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
