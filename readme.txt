=== Blogs Mexico Ping ===
Contributors: g30rg3x
Donate link: http://g30rg3x.com/donate
Tags: ping, blogs mexico
Requires at least: 2.0
Tested up to: 2.3
Stable tag: 1.0.1

Envia pings de manera automatica hacia Blogs Mexico, cada vez que publiques una nueva entrada.

== Description ==

Blogs Mexico Ping, es un plugin para WordPress, dise&ntilde;ado para enviar "pings" o notificaciones de actualizacion hacia la pagina 'Blogs Mexico',
cada vez que se publique una nueva entrada o se edite una entrada previa.<br/>
Fue desarrollado por la necesidad de enviar actualizaciones constantes 'en-vivo', ya que el sistema de envio de pings automatizado que wordpress 
incluye, se encuentra desactivado por abuso.<br/>
Este plugin viene a ayudarnos a los que usamos WordPress para seguir actualizando nuestros blogs de manera automatizada y totalmente no abusiva 
y justa.

== Installation ==
 
1. Abre con cualquier editor el archivo "blogs_mexico_ping.php" 
1. En las lineas 42 y 45, se encuentran las variables a cambiar, que corresponden al titulo y a la URL respectivamente, le recordamos poner exactamente la informacion como la registro. 
1. Subir el archivo guardado al directorio `/wp-content/plugins/`. 
1. Entra a tu panel de administracion o dashboard y activa el plugin 
1. Listo ahora cada vez que publiques o edites una entrada, sera notificado de manera automatica blogsmexico. 

== Frequently Asked Questions ==

= Como se que mi servidor cuenta con soporte para sockets =

Se hace sacando la informacion de PHP, atravez de la funcion phpinfo() crea un archivo que contenga algo como: `<?php phpinfo();?>`
una vez que lo ejecutes checa que en el modulo de sockets el soporte se encuentre en modo "enabled".

= Por que no aparezco en la lista de actualizados =

Primero checa que se encuentre activado el plugin, segundo checa el soporte de sockets, tercero checa que el titulo y url sean los correctos, 
si aun asi no sirve te pido me contactes para tratar de solucionar tu problema y ver si es algun fallo del software .

= Por que hiciste el plugin =

Por que me daba flojera ir cada vez y de manera manual rellenar el formulario por cada nota nueva, asi basicamente siguo manteniendo una 
pseudo funcion ping, como la de wordpress pero especialmente dise&ntilde;ada para blogsmexico.com 

= Piensas Mejorar el plugin =

Todo depende del rumbo que lleve el plugin.

= Tengo ideas y tengo ganas de colaborar, que hago =
Contactarme a mi correo g30rg3x@gmail.com 

= No se programar/desarrollar y tampoco tengo ideas... puedo colaborar de alguna otra forma =

Tambien puedes colaborar haciendo conocer este plugin asi como ayudar economicamente enviando un donativo
siguiendo la liga que se encuentra mas arriba de este texto.

== Screenshots ==

No hay capturas de pantalla

== Atencion! ==

Le recordamos que este plugin no puede funcionar, sin que haya registrado previamente su blog en el "Directorio de Bitacoras Mexicanas" 
de blogsmexico.com<br/>
Para realizar este paso de click al siguiente enlace:
[http://www.blogsmexico.com/registro](http://www.blogsmexico.com/registro "Blogs Mexico Registro")

== Notas Finales ==

Este plugin fue realizado realmente para uso personal, pero le comente a algunas personas sobre el y parecio gustarles la idea de automatizar 
desde el nivel de wordpress y me pidieron que lo haga publico.<br/>
Otra cosa que tengo en mente, es que blogs mexico de momento a otro implemente un sistema de Captchas, el cual evitaria que estos robots puedan 
acceder al envio de informacion, con lo cual abria acabado el tiempo de vida de este plugin (a menos que implemente un algoritmo anti-captcha).<br/>
Espero les sirva este plugin para asi seguir automatizados y jugando limpio.