### Creacion de nuestra base de datos
Primero deberemos el archivo de nuestra migración, en la terminal dentro del directorio del proyecto escribimos:
~~~
php artisan make:migration create_productos_table
~~~
Luego buscamos el archivo creado lo podemos encontrar dentro del proyecto en: `database/migration`

`create_productos_table`  --> Le remplazamos todo el codigo pertinente a ese archivo: [create_productos_table](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/database/migrations/2023_06_12_164546_create_productos_table.php)

Luego le agregamos la migracion 
~~~
docker-compose exec laravel.test php artisan migrate
~~~


[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)
