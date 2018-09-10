<?php
//Emula la estructura del directorio , es decir:
//dos clases se pueden llamar iguales mientras su namespace sea diferente
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      return 'Usuarios';
    }

    public function show($id){
      return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
      return "Creando usuario";
    }

}
