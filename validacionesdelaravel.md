### Agregar validaciones a los formularios
Creamos las las vistas para el campo de las validaciones
~~~
docker-compose exec laravel.test php artisan lang:publish
~~~
Nos vamos al directorio de las vistas de las validaciones `lang/en`, Realmente podemos modificar todos los mensajes de errores de nuestras validaciones de todos los campos
y para todas las situaciones, unicamente necesitamos cambiar el valor que nos devuelve el mensaje de texto, en mi caso unicamente he modificado estos.

`validation.php`  --> y le remplazas todo el codigo pertinente a ese archivo: [validation.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/lang/en/validation.php)

`pagination.php`  --> y le remplazas todo el codigo pertinente a ese archivo: [pagination.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/lang/en/pagination.php)



[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)
