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

Route::get('/', 'HomeController@welcome')->name('welcome');


Route::get('/signin', function () {
    return view('signin');
})->name('signin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('categorias', 'CategoriasController');

Route::resource('productos', 'ProductosController');


Route::get('/listaproductos','ListaComprasController@index')->name('listarproductos');

Route::get('/detalle_producto/{id}','ListaComprasController@detalleproducto')->name('detalleproducto');

Route::get('/agregarproducto/{id}','ListaComprasController@agregarproducto')->name('agregarproducto');

Route::get('/agregado','ListaComprasController@agregado')->name('agregado');

Route::get('/review','ListaComprasController@review')->name('review');

Route::get('/procesarpedido','ListaComprasController@procesarpedido')->name('procesarpedido');

Route::get('/vaciar','ListaComprasController@vaciarcarrito')->name('vaciarcarrito');


Route::get('/registro', function () {
    return view('shop.registro');
})->name('registro');

Route::get('/revision', function () {
    return view('shop.revision');
})->name('revision');

Route::get('/test','ListaComprasController@test')->name('test');

Route::resource('usuarios', 'UsuariosController');