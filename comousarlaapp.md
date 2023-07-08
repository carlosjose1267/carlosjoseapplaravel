### Levantando la aplicación

Siempre que queramos levantar nuestra aplicacion deberemos hacer lo siguiente, estando dentro del directorio de nuestra aplicación:

~~~
./vendor/bin/sail up
~~~
Esperamos que nos devuelva el enlace la direccion del servidor por pantalla -> http://0.0.0.0:80 y luego en otra terminal ejecutamos:
~~~
docker-compose exec laravel.test npm run dev
~~~

Ahora nos saldra un error, esto se debe a que la vista estara esperando unos parametros que no le llegan, porque no existen por lo que ahora deberemos de crear los productos, accederemos desde el navegador a la ruta `0.0.0.0/form`.

**Automaticamente nos redigira a la vista de `login`, ya que en esta vista necesitamos autentificación como ya indicamos anteriormente en puntos anteriores, deberemos de registrarnos primero**

<p align="center">
<img src="https://i.postimg.cc/vTpKfNTg/Captura16.png"   
</p>

Una vez hecho, accederemos al formulario para crear los productos, rellenamos los campos teniendo en cuenta sus validaciones, en el campo del archivo agregaremos la imagen que nos hemos descargado y en el campo `enlace` agregamos un enlace dado en el anterior punto a este.

<p align="center">
<img src="https://i.postimg.cc/KjNNvpLh/Captura17.png"   
</p>

> Cabe mencionar que deberemos colocar la imagen y su enlace con su correspondiente producto.

