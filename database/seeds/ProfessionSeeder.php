<?php
use App\Models\Profession; //ejemplo si se quiere alias App\Models\Profession as Profesion
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profession::create([
        'title' => 'Desarrollador front-end',
      ]);
      Profession::create([
        'title' => 'Desarrollador back-end',
      ]);
      Profession::create([
        'title' => 'Diseñador web',
      ]);
    }
}
