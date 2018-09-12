<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Escapar caracteres especiales en php e() -->
    <title>{{ $title }} - Styde</title>
  </head>
  <body>
    <h1>{{ $title }}</h1>
    <hr>
    <!--  empty es igual a : if(empty($users))
    @empty($users)
      <p>No hay usuarios registrados.</p>
    @else
    <ul>
      @foreach ($users as $user)
      <li>
        {{ $user }}
      </li>
      @endforeach
    </ul>
    @endempty
    -->
    <!--Otra forma de validar pero directamente desde el for -->
    <ul>
      @forelse ($users as $user)
      <li>
        {{ $user }}
      </li>
      @empty
      <li>No hay usuarios registrados.</li>
      @endforelse
    </ul>
  </body>
</html>
