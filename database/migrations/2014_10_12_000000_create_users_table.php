<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations. / Create table
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //entero - autoincrementable
            $table->unsignedInteger('profession_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken(); // no es una columna, es un metodo helper
            $table->timestamps(); //metodo helper crea dos columnas:
                                  //created_at y updated_at
        });
    }

    /**
     * Reverse the migrations. / Drop table
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    /*
    Para ver ayudas artisan
    php artisan -h (más el comando en especifico que se quiere mirar)
    php artisan para ver todos los comandos

    Para ejecutar el sql de laravel desde consola
    php artisan migrate ejecuta function up() de todas las migraciones que no esten insertadas en la tabla migration.
    php artisan migrate:rollback ejecuta function down() de el último lote(batch) agregado en la tabla migration.
    php artisan migrate:fresh elimina todas las tablas y ejecuta todas las migraciones.
    php artisan migrate:reset ejecuta function down() de todas las migraciones.
    php artisan migrate:refresh ejecuta function down() y up() de todas las migraciones.
    php artisan make:migration nombre_migración generar una nueva migración.
    */
}
