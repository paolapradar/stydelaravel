#--------------------------Usando Eloqunt ORM--------------------------
Aqui podrás introducir código php.
**Nota:** Cuando se realiza un cambio en el código fuente se debe salir e iniciar nuevamente el tinker.

##Iniciar
  php artisan tinker
##Salir
  exit
##Ver todos los datos de una tabla
  App\Models\Profession::all();
  App\Models\Profession::get();
##signar a variable
  $professions = App\Models\Profession::all();
##Obtener primer fila
  $professions->first();
##Obtener ultima fila
  $professions->lasst();
##Obtener una fila aleatoria
  $professions->random();
  $professions->random(1);
##Obtener una columna
  $professions->pluck('title');
##Crear una colección
  collect(['Paola','Styde','Laravel']);
##Consulta con condiciones
###Condición
  $backenDeveloper = App\Models\Profession::where('Title','Desarrollador back-end')->get();
###Por id
  $users = App\Models\User::find(1);
