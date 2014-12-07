<?php 
// Para que la cookie funcione se tiene que especificar la ruta del directorio en el cuarto parámetro con "/", se entiende que la cookie existirá en todo el directorio del sitio

// Parámetros de setcookie (nombre de la cookie, valor de la cookie, tiempo, ruta del directorio)

// Se podría poner un quinto parámetro correspondiente al dominio donde queremos que actúe la cookie (ejemplo: http://www.bextlan.com)

setcookie("idioma_solicitado",$_GET["idioma"],time()+86400,"/");
header("Location: usar-cookie.php");
?>
