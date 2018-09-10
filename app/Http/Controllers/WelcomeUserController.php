<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //Cuando el controlador tiene solo una función
    //permite llamar un objeto como funcion
    public function __invoke($name,  $nickname =  null){
      $name     = ucfirst($name);
      $nickname = ucfirst($nickname);
      if($nickname){
        return "Bienvenido(a) {$name}, tu apodo es {$nickname}";
      }
      return "Bienvenido(a) {$name}";
    }
}
