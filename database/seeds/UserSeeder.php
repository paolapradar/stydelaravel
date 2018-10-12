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
      /*
      Constructor manual de consulta en sql
        Array
          $professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);
          $professions[0]->id
        Dato
          $profession = DB::select('SELECT id FROM professions WHERE title = :title LIMIT 0,1', ['title'=>'Desarrollador back-end']);
          $profession
      Constructor laravel de consulta en sql
        Array
          Devuelve solo el campo id de la primer fila de la tabla
            $professions = DB::table('professions')->select('id')->table(1)->get();
          Devuelve todos los campos de la primer fila de la tabla
            $professions = DB::table('professions')->first();
        Fila
          Devuelve dos campos con un where omitiendo operador de comparación
            $professions = DB::table('professions')->select('id','title')->where(['title' => 'Desarrollador back-end'])->first();
            $professions = DB::table('professions')->select('id','title')->where('title','Desarrollador back-end')->first();
          Devuelve dos campos con un where con operador de comparación
            $professions = DB::table('professions')->select('id','title')->where('title', '=', 'Desarrollador back-end')->first();
            $professions->id
          Devuelve solo el campo id de la primer fila de la tabla
            $profession = DB::table('professions')->select('id')->first();
            $profession->id
          Devuelve el valor de la consulta que se indica
            $profession = DB::table('professions')
                        ->where('title', 'Desarrollador back-end')
                        ->value('id');
          Devuelve el valor de la consulta que se indica con método mágico
            $profession = DB::table('professions')->whereTitle('Desarrollador back-end')->value('id');
            $profession
        Constructor de consulta sql desde modelos laravel
            $profession = Profession::whereTitle('Desarrollador back-end')->value('id');
      */

    }
}
