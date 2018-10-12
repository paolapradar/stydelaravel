<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function findByEmail($email){
      return static::where(compact('email'))->first();
    }

    //Busca el sufijo id para identificar a quien le pertenece la relacion
    //en este caso: profession_id
    public function profession(){
      return $this->belongsTo(Profession::class);
      //si no se usa la convención de Eloquent, se puede llamar asi:
      //return $this->belongsTo(Profession::class,'id_profession');
    }

    public function isAdmin(){
      return $this->isAdmin;
    }
}
