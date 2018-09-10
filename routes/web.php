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
Route::get('/usuarios', function () {
    return 'Usuarios';
});

//Prueba de que las rutas tiene como prioridad su orden
Route::get('/usuarios/nuevo', function () {
    return "Creando usuario";
});

//Nueva ruta que obtiene variable númerica
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id','\d+');

//Nueva ruta con variables opcionales
Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
  $name     = ucfirst($name);
  $nickname = ucfirst($nickname);
  if($nickname){
    return "Bienvenido(a) {$name}, tu apodo es {$nickname}";
  }
  return "Bienvenido(a) {$name}";
});
