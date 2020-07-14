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

Auth::routes();

Route::get('/home', 'HomeController@PeliculasRandom')->name('home');
Route::get("detalle/{id}","MovieController@DetallePelicula");
Route::get("listado","MovieController@ListadoPeliculas");

Route::get("agregar",function(){
    return view("IngresarPelicula");
});

Route::post("agregar","MovieController@AgregarPelicula");

Route::get("modificar",function(){
    return view("modificarPelicula");
});

Route::post("modificar","MovieController@ModificarPelicula");

Route::get("eliminar/{id}","MovieController@EliminarPelicula");
