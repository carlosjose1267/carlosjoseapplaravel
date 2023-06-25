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
