1. composer global require laravel/installer -> instalar laravel en la carpeta
2. php -v -> para ver la version.
3. laravel new "nombre de la practica" -> para crear un nuevo proyecto.
4. php artisan migrate -> va a recorrer las migraciones que hemos creado y va a ejeutar el metodo up.
5. php artisan make:migration clase -> sirve para crear una migracion
6. php artisan migrate:rollback -> revierte las migraciones hechas, basicamente, hacer un cntrl. z
7. php artisan make:seeder AlumnosSeeder -> sirve para crear un Seeder
8. php artisan migrate:fresh -> borra todas las tablas y las vuelve a crear de nuevo
9. php artisan db:seed ->para insertar datos desde el seeder
10. php artisan make:model Alumno -> para crear un modelo
11. php artisan tinker -> para ejercutar tinker
12. php artisan make:Controller AlumnoController -> Crea el controlador Alumno
12. php artisan make:Controller AlumnoController -r -> Crea el controlador Alumno "admin"
13. php artisan make:middleware CheckearId -> Crea un middleware que confirma que el id pues cumpla los requisitos que dejemoss
