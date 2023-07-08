
Nos logearemos en la web oficial de Paypal, en caso de no tener una cuenta previa deberemos crearla:

`https://developer.paypal.com/dashboard`

Luego accedemos al dashboard y pinchamos en `API credentials`
<p align="center"><img src="https://i.postimg.cc/zD60yqwf/Captura8.png"></p>
Creamos la app y copiamos el codigo `Client ID` que nos da la aplicación (el codigo de cada app es diferente asegurate de copiar el tuyo)
<p align="center"><img src="https://i.postimg.cc/2yMcmDGV/Captura9.png"></p>

Ahora nos vamos al codigo de la vista `index.blade.php`, `app.blade.php` y `paypal.blade.php` y le agregaremos el `client ID` de tu aplicacion creada:
Busca la linea mencionada en las tres vistas y cambialo por el codigo generado de tu aplicacion.
<p align="center"><img src="https://i.postimg.cc/VLBxcSMt/Captura11.png"></p>

> Debe de estar colocado tu codigo de la app entre el `?client-id=` y `&currency=`

Ahora vamos a crear los usuarios que se van asociar a tu api de paypal. Recuerda que estamos trabajando con la api de paypal version de sandbox es decir (la version de prueba).

<p align="center"><img src="https://i.postimg.cc/vmMj2GDz/Captura10.png"></p>

Creamos los usuarios:

<p align="center"><img src="https://i.postimg.cc/wvnnVLNt/Captura12.png"></p>

<p align="center"><img src="https://i.postimg.cc/mZ8HtjQ2/Captura13.png"></p>

En su menu de opciones `...` podemos cambiar los parametros de la cuenta a lo que queramos, como el nombre el correo, la contraseña entre otras cosas, sera necesario conocer al menos el `correo del usuario` y `la contraseña`.

> Recuerda que puedes poner cualquier valor valido, pero solo desde la versión sandbox.

<p align="center"><img src="https://i.postimg.cc/c4TGqgyz/Captura14.png"></p>

> Tenemos dos cuentas, una que sera la cuenta de la empresa que recibira los pagos y la cuenta del usuario que es la que realiza las compras de los productos.
Ya tenemos nuestra API de Paypal configurado

[Volver a la introduccion del proyecto](https://github.com/carlosjose1267/carlosjoseapplaravel/tree/main)
