<?php
//Emula la estructura del directorio , es decir:
//dos clases se pueden llamar iguales mientras su namespace sea diferente
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      if(request()->has('empty')){
        $users = [];
      } else {
        $users = [
          'Joel',
          'Ellie',
          'Paola',
          'Sergio',
          'Max',
        ];
      }
      $title = 'Listado de usuarios';
    /*Pasar parametros a una vista.
      Array asociativo que toma el nombre variable y su valor,
      pero estas deben llamarse igual.

      PARA MOSTRAR PHP EN LA PÁGINA:
      dd(); es un var_dump más un die();
      dd(compact('users','title'));*/
      return view('users.index', compact('users','title'));
    }

    public function show($id){
      return view('users.show', compact('id'));
    }

    public function create(){
      return "Creando usuario";
    }

}
