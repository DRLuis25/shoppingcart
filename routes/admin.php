<?php
Route::get('/admin/dashboard', function(){
    return 'Welcome Admin!';
})->name('admin.dashboard');

//Admin
Route::get('/admin/home', 'HomeController@index')->name('home');

Route::resource('/admin/categorias', 'CategoriasController');

Route::resource('/admin/productos', 'ProductosController');

Route::resource('/admin/usuarios', 'UsuariosController');