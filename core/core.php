<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!

*/

session_start();

date_default_timezone_set('America/Guayaquil');
#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','prueba');
#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','PRUEBA2.0');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' X.x.');
define('APP_URL','http://localhost/db1');
#Constantes de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','cristopherlizame@gmail.com');
define('PHPMAILER_PASS','crisa141214');
define('PHPMAILER_PORT',465);
#Constantes básicas de personalización
define('MIN_TITULOS_TEMAS_LONGITUD',9);
define('MIN_CONTENT_TEMAS_LONGITUD',270);
#Estructura

require('core/models/class.Conexion.php');
require('core/bin/function.salir.php');
#require('core/bin/functions/Encrypt.php');
#require('core/bin/functions/Users.php');
#require('core/bin/functions/Categorias.php');
#require('core/bin/functions/Foros.php');
#require('core/bin/functions/EmailTemplate.php');
#require('core/bin/functions/LostpassTemplate.php');
#require('core/bin/functions/UrlAmigable.php');

?>
