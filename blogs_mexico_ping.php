<?php
/*
Plugin Name: Blogs Mexico Ping
Plugin URI: http://g30rg3x.com/blogs-mexico-ping/
Description: Envia pings de manera automatica hacia <a href="http://www.blogsmexico.com">Blogs Mexico</a>, cada vez que publiques una nueva entrada.
Author: g30rg3_x
Version: 1.0.1
Author URI: http://g30rg3x.com/
*/

/*
    Copyright 2006,2007 g30rg3_x  (email : g30rg3x@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/*
IMPORTANTE:
Favor de leer el archivo "leeme.html", antes de proseguir.

Le Recordamos que en la seccion de configuraciones debes teclear la direccion (URL) 
asi como el Titulo, tal como se registro, de otra forma no funcionara.
Ejemplo, si registraste la direccion http://www.mibitacora.blogspot.com 
no podras hacer ping con la direccion http://mibitacora.blogspot.com.
*/

// Anti Full Path Disclosure
if(!defined("ABSPATH"))
{
 	die("Intento de Hacking");
}

/* Inicio de Configuraciones */

// Titulo de la bitacora //
$titulo = "AQUI EL TITULO DE TU BLOG";

// Direccion / URL //
$url = "AQUI LA URL DE TU BLOG";

/* Fin de Configuraciones */

/* 
   De aqui en adelante, no se necesita que modifiques nada mas,
   a menos que tengas conocimiento sobre programacion en PHP 
   y/o manejo de sockets en PHP.
   
   Si crees que se puede optimizar algo, o encontraste algun error
   hazmelo saber a mi correo en gmail <g30rg3x_at_gmail_dot_com>
*/

function blogs_mexico_ping($post_ID)
{
	// Obteniendo Configuraciones
	global $titulo, $url;
	
	// Creacion e Inicio de una conexion hacia www.blogsmexico.com
	$conexion = fsockopen("www.blogsmexico.com", 80, $errno, $errstr, 30);
	
  if(!$conexion)
  {
    // Reporte de error conexion
    add_action("admin_head", print("<center><b>ERROR $errno</b>: $errstr</center>"));
  }
  else
  {
  	// Convirtiendo las cadenas de configuraciones al formato URL
	  $titulo = urlencode($titulo);
	  $url = urlencode($url);
	 
	  // Generando la cabecera HTTP a enviar atraves de la conexion previamente establecida
    $cabecera = "GET /hacerping.php?titulo=$titulo&url=$url HTTP/1.1\r\n";
    $cabecera .= "Host: www.blogsmexico.com\r\n";
    $cabecera .= "User-Agent: Blogs Mexico Ping 1.0 (WordPress Plugin)\r\n";   
    $cabecera .= "Connection: Close\r\n\r\n";

    // Envio de la cabecera generada atravez de la conexion previamente establecida
    fwrite($conexion, $cabecera);
    
    // Cerrando la conexion previamente establecida
    fclose($conexion); 
  }
}

// A~ade este plugin cuando se publique y/o edite una nueva entrada
add_action('publish_post', 'blogs_mexico_ping');
?>