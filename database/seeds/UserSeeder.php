<?php
use App\Models\User;
use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Insert desde modelos laravel
      User::create([
        'name'           =>  'Paola',
        'email'          =>  'ejemplo@gmail.com',
        'password'       =>  bcrypt('1234'),
        'profession_id'  =>  Profession::whereTitle('Desarrollador back-end')->value('id'),
        'is_admin'       =>  true,
      ]);

      User::create([
        'name'           =>  'Max',
        'email'          =>  'ejemplo2@gmail.com',
        'password'       =>  bcrypt('1234'),
        'profession_id'  =>  Profession::whereTitle('Desarrollador front-end')->value('id'),
      ]);

    }
}
