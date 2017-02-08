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

Route::get('/', 'InicioController@inicio');

Route::get('posts', 'PostsController@index');

Route::get('users', 'InicioController@guardarUsuario');

Route::get('users2', 'InicioController@guardarUsuario2');

Route::get('buscar', 'InicioController@buscarUsuario');

Route::get('modificar-email', 'InicioController@modificarEmail');
