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

//Cualquiera
Route::get('/', 'ListaComprasController@welcome')->name('welcome');

Route::get('/listaproductos','ListaComprasController@index')->name('listarproductos');

Route::get('/detalle_producto/{id}','ListaComprasController@detalleproducto')->name('detalleproducto');

Route::get('/signin', 'ListaComprasController@signin')->name('signin');

Auth::routes();

//Admin
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categorias', 'CategoriasController');

Route::resource('productos', 'ProductosController');

//Usuario logeado

Route::get('/agregarproducto/{id}','ComprasController@agregarproducto')->name('agregarproducto');

Route::get('/agregado','ComprasController@agregado')->name('agregado');

Route::get('/review','ComprasController@review')->name('review');

Route::get('/procesarpedido','ComprasController@procesarpedido')->name('procesarpedido');

Route::get('/vaciar','ComprasController@vaciarcarrito')->name('vaciarcarrito');


Route::get('/registro', function () {
    return view('shop.registro');
})->name('registro');

Route::get('/revision', function () {
    return view('shop.revision');
})->name('revision');

Route::get('/test','ListaComprasController@test')->name('test');

Route::resource('usuarios', 'UsuariosController');