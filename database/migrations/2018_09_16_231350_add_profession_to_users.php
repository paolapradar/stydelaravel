<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionToUsers extends Migration
{
    /**
     * Run the migrations. / Alter table add column
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users',function (Blueprint $table) {
           $table->string('profession',50)->nullable();
       });
    }

    /**
     * Reverse the migrations. / Alter table drop column
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users',function (Blueprint $table) {
          $table->dropColumn('profession');
      });
    }
}
