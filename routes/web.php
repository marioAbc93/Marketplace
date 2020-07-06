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

Route::get('/', 'PagesController@inicio')->name('welcome');
Route::get('/productos', 'PagesController@productos')->name('productos');
Route::get('/productos/articulo', 'PagesController@articulo')->name('articulo');
Route::get('/contacto', 'PagesController@contacto')->name('contacto');
Route::get('/finalizar-compra', 'PagesController@compra')->name('compra');

Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/productos/outlet', 'PagesController@outlet')->name('outlet');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//// Vestuario ////
Route::get('/admin/vestuario', 'VestuarioController@vestuario')->name('vestuario');
Route::get('/admin/vestuario/crear', 'VestuarioController@index')->name('crearvestuario');
Route::post('/admin/vestuario/store', 'VestuarioController@store')->name('vestuario.store');
//// Calzado ////
Route::get('/admin/calzado', 'ProductoController@calzado')->name('calzado');
Route::get('/admin/calzado/crear', 'CalzadoController@index')->name('crearcalzado');
Route::post('/admin/calzado/store', 'CalzadoController@store')->name('calzado.store');
//// Complementos ////
Route::get('/admin/complementos', 'ProductoController@complementos')->name('complementos');
Route::get('/admin/complemento/crear', 'ComplementoController@index')->name('crearcomplemento');
Route::post('/admin/complemento/store', 'ComplementoController@store')->name('complemento.store');
//// Outlet /////
Route::get('/admin/descuentos', 'OutletController@descuento')->name('descuento');
Route::get('/admin/descuentos/crear', 'OutletController@crear')->name('creardescuento');
Route::post('/admin/descuentos/store', 'OutletController@store')->name('descuento.store');
/////  Usuarios  /////
Route::get('/admin/usuarios', 'PagesController@usuarios')->name('usuarios');
