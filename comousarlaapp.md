### Levantando la aplicación

Siempre que queramos levantar nuestra aplicacion deberemos hacer lo siguiente, estando dentro del directorio de nuestra aplicación:

~~~
./vendor/bin/sail up
~~~
Esperamos que nos devuelva el enlace la direccion del servidor por pantalla -> http://0.0.0.0:80 y luego en otra terminal ejecutamos:
~~~
docker-compose exec laravel.test npm run dev
~~~
### Agregando productos

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

### Modificando productos

Despues de agregar un producto podemos ver como se nos a agregado una fila en nuestra lista de productos en forma de crud.

<p align="center">
<img src="https://i.postimg.cc/T3wyKdF4/Captura18.png"   
</p>

Si pinchamos en el lapiz de esa fila podemos modificar los valores agregados anteriormente desde el formulario para editar.

<p align="center">
<img src="https://i.postimg.cc/DwqNbhG1/Captura19.png"   
</p>

> Podemos modificar el parametro que queramos, ya sean **todos** o **solo uno** en concreto, siempre que se respeten las restrincciones de las validaciones. Una vez pinchemos en guardar los cambios y nos salga la alerta en verde podremos ver los cambios volviendo a la lista de los productos.

### Borrando productos

Por ultimo, tenemos la funcion para borrar los productos de la lista, simplemente pinchamos sobre el icono de la basura en la fila del producto que queramos, nos saldra una alerta para aceptar o cancelar el borrado. 

<p align="center">
<img src="https://i.postimg.cc/Z5R122vN/Captura20.png"   
</p>


[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)



