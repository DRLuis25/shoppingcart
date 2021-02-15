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

Route::get('/registro', function () {
    return view('shop.registro');
})->name('registro');

//Usuario logeado

Route::get('/agregarproducto/{id}','ComprasController@agregarproducto')->name('agregarproducto');

Route::delete('/eliminarproducto/{id}','ComprasController@eliminarproducto')->name('eliminarproducto');

Route::get('/agregado','ComprasController@agregado')->name('agregado');

Route::get('/review','ComprasController@review')->name('review');

Route::post('/procesarpedido','ComprasController@procesarpedido')->name('procesarpedido');

Route::get('/procesado','ComprasController@procesado')->name('procesado');

Route::get('/vaciar','ComprasController@vaciarcarrito')->name('vaciarcarrito');

Route::get('/revision','ComprasController@revision')->name('revision');

Route::get('ordenes','ComprasController@ordenes')->name('ordenes');

Route::resource('ventas', 'VentasController');

Route::post('/anularventa','VentasController@anular')->name('ventas.anular');

Route::get('/verorden/{id}','VentasController@verorden')->name('ventas.ver');

Route::resource('detalleVentas', 'DetalleVentasController');