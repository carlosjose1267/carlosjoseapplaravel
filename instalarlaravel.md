### Instalacion de laravel y servicios usando docker-compose
Puedes cambiar el nombre de tu proyecto, en mi caso se llama `carlosapp`

~~~
curl -s https://laravel.build/carlosapp | bash
~~~
Accede al directorio de tu proyecto, `cd carlosapp`, y ejecutalo: (este proceso puede tardar varios minutos)
~~~
./vendor/bin/sail up
~~~
<b>Nota:</b>
Una vez arranque el proyecto deberemos irnos a nuestro navegador y colocar la siguiente ruta: `http://0.0.0.0` <br>Tambien podremos detener el proyecto desde la terminal presionando `crtl+c`

#### Agregacion de servicio

Detenemos el proyecto, y nos vamos a la ruta raiz de nuestro proyecto y editamos el archivo `docker-compose.yml`

`docker-compose.yml`  --> Le remplazamos todo el codigo pertinente a ese archivo: [docker-compose.yml](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/docker-compose.yml)

Volveremos a ejecutarlo para que se instale lo agregado:
~~~
./vendor/bin/sail up
~~~

#### Acceder a phpmyadmin (opcional)

Podemos acceder a phpmyadmin desde el navegador agregando la siguiente ruta: `http://0.0.0.0:8001`

El usuario es `sail` y la contraseña es `password`, esto se puede cambiar en el archivo `.env`(es un archivo oculto, no obstante puedes visualizarlo desde un editor), podemos cambiar los valores si lo deseamos,
para que se efectuen los cambios sera necesario volver arrancar el proyecto con `./vendor/bin/sail up`, al acceder a phpmyadmin podremos ver nuestras base de datos, las tablas, los campos y toda su infraestructura en general.
Una vez tengamos esto en cuenta volveremos a detener el proyecto con `ctrl+c`

#### Editor de codigo
Ahora necesitaremos agregar y modificar diferentes apartados, por lo que necesitaremos de un editor de codigo, puedes usar visual studio code:
~~~
sudo apt update
~~~
~~~
sudo apt install snapd
~~~
~~~
sudo snap install code --classic
~~~

Abre el editor y agrega el directorio de tu proyecto al workspace, como recomendacion puedes instalar estas extensiones, son muy utiles para trabajar y visualizar mejor el codigo del proyecto.

<p align="center"><img src="https://i.postimg.cc/rFFn5L0h/Captura7.png"></p>

[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)
