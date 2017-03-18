<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db_name = "carritocompras";

$link = mysql_connect($host, $user,$pass) or
 die ("No se pudo conectar a la base: " + mysql_error());;

mysql_select_db($db_name);

?>
