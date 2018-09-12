<?php
//Emula la estructura del directorio , es decir:
//dos clases se pueden llamar iguales mientras su namespace sea diferente
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

      $users = [
        'Joel',
        'Ellie',
        'Paola',
        'Sergio',
        'Max',
        '<script>alert("Clicker");</script>',
      ];

      $title = 'Listado de usuarios';
      //Pasar parametros a una vista. OPCIÓN 1:
      // return view('users', [
      //   'users'  => $users,
      //   'title'  => $title,
      // ]);
      // OPCIÓN 2:
      // return view('users')->with([
      //   'users'  => $users,
      //   'title'  => $title,
      // ]);
      // OPCIÓN 3:
      // return view('users')
      //       ->with('users', $users)
      //       ->with('title', $title);
      // OPCIÓN 4:
      // Array asociativo que toma el nombre variable y su valor ya que se llaman igual
      // dd(); es un var_dump más un die();
      dd(compact('users','title'));
      return view('users', compact('users','title'));
    }

    public function show($id){
      return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
      return "Creando usuario";
    }

}
