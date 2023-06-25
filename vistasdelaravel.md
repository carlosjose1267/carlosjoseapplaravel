### Creando los directorios para el usuario y administrador

Nos vamos al directorio del proyecto y accedemos a: `resources/view`

Creamos los directorios y lo ponemos con el siguiente nombre:

`layouts` y `productos` 



### Agregando la vista general de las paginas para el usuario y administrador

Dentro del directorio de `layouts` creamos el archivo y lo agregamos con el siguiente nombre:

`index.blade.php`  --> y le agregamos todo el codigo pertinente a ese archivo: [index.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/layouts/index.blade.php)



### Agregando las vistas para el usuario y administrador

Dentro del directorio de `productos` creamos el archivo y lo agregamos con el siguiente nombre:

`editform.blade.php`        --> Añadimos todo el codigo pertinente a ese archivo: [editform.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/productos/editform.blade.php)

`lista.blade.php`        --> Añadimos todo el codigo pertinente a ese archivo: [lista.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/productos/lista.blade.php)

`main.blade.php`        --> Añadimos todo el codigo pertinente a ese archivo: [main.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/productos/main.blade.php)

`paypal.blade.php`        --> Añadimos todo el codigo pertinente a ese archivo: [paypal.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/productos/paypal.blade.php)

`productoform.blade.php`        --> Añadimos todo el codigo pertinente a ese archivo: [productoform.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/productos/productoform.blade.php)

### Agregando el componente de autentificacion de laravel

<b>En el directorio de nuestro proyecto</b> escribiremos lo siguiente en la terminal:

~~~
docker-compose exec laravel.test composer require laravel/ui
~~~
~~~
docker-compose exec laravel.test php artisan ui bootstrap --auth
~~~
~~~
sudo apt install npm
~~~

### Agregando las vistas para el usuario y administrador

Dentro del directorio de `layouts` se nos creara unos archivos predefinos del componente de autentificacion de laravel, sin embargo deberemos de modificarlos:

`app.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [app.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/layouts/app.blade.php)

Dentro del directorio de `auth` se nos creara unos archivos predefinos del componente de autentificacion de laravel, sin embargo deberemos de modificarlos:

`login.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [login.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/login.blade.php)

`register.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [register.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/register.blade.php)

`verify.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [verify.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/verify.blade.php)

Dentro del directorio de `auth/password` se nos creara unos archivos predefinos del componente de autentificacion de laravel, sin embargo deberemos de modificarlos:

`confirm.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [confirm.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/passwords/confirm.blade.php)

`email.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [email.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/passwords/email.blade.php)

`reset.blade.php`  --> le agregamos todo el codigo pertinente a ese archivo: [reset.blade.php](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/resources/views/auth/passwords/reset.blade.php)


Por ultimo, le agregamos la migracion
~~~
docker-compose exec laravel.test php artisan migrate
~~~

[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)



[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)
