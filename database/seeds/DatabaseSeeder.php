<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->truncateTables([
        'professions',
        'users'
      ]);
      $this->call(ProfessionSeeder::class);
      $this->call(UserSeeder::class);
    }

    // Trucate Tablas en Postgres
    protected function truncateTables(array $tables){
      foreach ($tables as $table) {
        DB::statement('TRUNCATE TABLE ' . $table . ' CASCADE;'); //Borra datos
      }
    }
    /* Trucate Tablas en Mysql
     protected function truncateTables(array $tables){
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //Desactiva revisión de claves foráneas
      foreach ($tables as $table) {
        DB::table($table)->truncate(); //Borra datos
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); //Activa revisión de claves foráneas
    }
    */
}
