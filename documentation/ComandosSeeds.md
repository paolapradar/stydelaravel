# Comandos en consola para Seeds
Los archivos seed permiten gestionar los datos de la Base de Datos.

## Crear Seeder
    php artisan make:seeder NombretablaSeeder

## Ejecutar Seeder
    php artisan db:seed
    
## Ejecutar todas las migraciones y después los seeder  
    php artisan migrate:fresh --seed
