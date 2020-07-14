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

use App\Http\Controllers\catalogoController;
use App\Http\Controllers\IngresoController;


Route::get("login",function(){
    return view("login");
});
Route::post("login","IngresoController@IngresoUsuario");

Route::get("registrarse",function(){
    return view("register");
});
Route::post("registrarse","RegistroController@RegistrarUsuario");

Route::get("perfil","PerfilController@showCompras");

Route::get("contacto",function(){
    return view("contacto");
});
Route::post("contacto","ContactoController@EnviarCorreo");
    
Route::get("catalogo","productosController@showCatalogo");

Route::get("producto/{id}","productosController@showProducto");

Route::get("carrito","CarritoController@ShowCarrito");
Route::get("carrito/{id}","CarritoController@AgregarCompra");
Route::get("carrito/venta/final","CarritoController@ConcretarCompra");

Route::get("home","productosController@showFavorito");


Route::get("home/logout","IngresoController@Logout");

Route::post("perfil","PerfilController@ModificarDatos");