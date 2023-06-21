## Instalación de Docker y Docker Compose
Para ejecutar la aplicacion necesitaremos tener docker instalado ejecutaremos estos comandos desde la terminal de ubuntu:
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
#### Pon el nombre de usuario de tu maquina ubuntu por ejemplo en mi caso seria:
~~~
sudo usermod -aG docker carlos
~~~
### Instalacion de Docker Compose
~~~
sudo curl -L "https://github.com/docker/compose/releases/download/1.26.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
~~~
~~~
sudo chmod +x /usr/local/bin/docker-compose
~~~

[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/blob/main/README.md)
