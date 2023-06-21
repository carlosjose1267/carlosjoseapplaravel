<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Introducción

El objetivo de este proyecto sera conseguir emular todo el proceso de esta tienda de peliculas, en ella tendremos una vista para el usuario y en la otra tendremos una vista para el administrador que porsupuesto tendra una restriccion a estas vistas, en esas vistas que podra manejar las peliculas mediante un crud con las clasicas funcionalidades de listar, añadir productos, modificarlos y borrarlos. Ademas también podremos comprar ese producto mediante un botón de la api de paypal donde podremos comprar ese producto de forma singular, usaremos la versión sandbox de la api. Y todo esto en un contenedor de docker, por lo que tambien si queremos podriamos desplegar nuestra aplicacion en un entorno de producción.

La idea es que puedas levantar tu PROPIO proyecto en tu maquina local utilizando mi codigo en todo momento para las creaciones de las vistas, funciones de los controladores y demás, aqui puedes ver algunas capturas de como se visualiza este proyecto.

## Para vista del usuario
img en proceso

## Para la vista del administrador
img en proceso

### Indice

- Docker y Docker Compose.
- Instalacion del framework de laravel.
-
- 
-
-


## Instalación de Docker y Docker Compose
Para ejecutar la aplicacion necesitaremos tener docker instalado:
~~~
sudo apt update
~~~
~~~
sudo apt install apt-transport-https ca-certificates curl software-properties-common
~~~
~~~
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
~~~
~~~
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
~~~
~~~
sudo apt update
~~~
~~~
sudo apt install docker-ce
~~~
### Ejecutar docker sin privilegios de administrador (opcional)
~~~
sudo usermod -aG docker ${USER}
~~~
~~~
su - ${USER}
~~~
~~~
id -nG
~~~
~~~
sudo usermod -aG docker username 
~~~
