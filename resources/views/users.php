<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Escapar caracteres especiales en php e() -->
    <title><?php echo e($title);?> - Styde</title>
  </head>
  <body>
    <h1>Usuarios</h1>
    <ul>
      <?php foreach ($users as $user) {  ?>
      <li>
        <?php  echo e($user); ?>
      </li>
      <?php } ?>
    </ul>
  </body>
</html>
