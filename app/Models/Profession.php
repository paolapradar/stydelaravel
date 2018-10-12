<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /*
    Definir la tabla manualmente
      protected $table =  'professions';
    Omitir campos de auditoria
      public $timestamps  = false;
    */
    //Campos que permitidos para llenar desde una petición
    protected $fillable = ['title'];

    //Busca los usuarios a quien le pertenece la relacion
    public function users(){
      return $this->hasMany(User::class);
    }
}
