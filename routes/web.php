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
//Retorna vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

//Nueva ruta que retorna texto
Route::get('/usuarios', 'UserController@index');

//Prueba de que las rutas tiene como prioridad su orden
Route::get('/usuarios/nuevo', 'UserController@create');

//Nueva ruta que obtiene variable númerica
Route::get('/usuarios/{id}', 'UserController@show')
     ->where('id','\d+');

//Nueva ruta con variables opcionales con controlador de una sola función
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
