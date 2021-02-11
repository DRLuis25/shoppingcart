<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/review', function () {
    return view('review');
});

Route::get('/signin', function () {
    return view('signin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('categorias', 'CategoriasController');

Route::resource('productos', 'ProductosController');


Route::get('/listaproductos','ListaComprasController@index')->name('listarproductos');

Route::get('/registro', function () {
    return view('shop.registro');
})->name('registro');

Route::get('/revision', function () {
    return view('shop.revision');
})->name('revision');

Route::get('/test','ListaComprasController@test')->name('test');

Route::resource('usuarios', 'UsuariosController');