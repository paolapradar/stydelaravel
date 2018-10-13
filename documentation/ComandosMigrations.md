# Comandos en consola para Migrations
Los archivos migrations permiten manejar la estructura de la Base de Datos.

## Ayudas artisan

### Ver todas
    php artisan

### De un comando en especifico
    php artisan -h (más el comando que se quiere mirar)

## Sql de laravel desde consola

### Ejecutar Function up()
De todas las migraciones que no esten insertadas en la tabla migration.
    php artisan migrate

### Ejecutar Function down()
Del último lote(batch) agregado en la tabla migration.
    php artisan migrate:rollback

De todas las migraciones.
    php artisan migrate:reset

### Eliminar todas las tablas y ejecutar todas las migraciones.
    php artisan migrate:fresh

### Ejecutar function down() y up() de todas las migraciones.
    php artisan migrate:refresh

### Generar una nueva migración.
    php artisan make:migration nombre_migración
