### Creacion del modelo

~~~
docker-compose exec laravel.test php artisan make:model Producto
~~~

### Creacion de las rutas

Nos vamos al directorio de nuestro proyecto `routes/web.php`

`web.php`  --> Le remplazas todo el codigo pertinente a ese archivo: [web.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/routes/web.php)

### Creacion del controlador

Creamos el controlador:

~~~
docker-compose exec laravel.test php artisan make:controller ProductController
~~~

Nos vamos a su directorio de nuestro proyecto `app/Http/Controllers`

`ProductController.php`  --> Le remplazas todo el codigo pertinente a ese archivo: [ProductController.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/app/Http/Controllers/ProductController.php)


