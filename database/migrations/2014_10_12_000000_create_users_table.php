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
            $table->unsignedInteger('profession_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
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

}
