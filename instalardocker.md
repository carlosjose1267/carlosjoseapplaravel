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
~~~
sudo usermod -aG docker username 
~~~