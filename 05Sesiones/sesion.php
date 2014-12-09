<?php 
session_start();

//Evalúo que la sesión continúes verificando una de las variables creadas en control.php, cuando ésta ya no coincida con su valor inicial se redirije al archivo de salir.php
if (!$_SESSION["autentificado"]) {
	header("Location: salir.php");
} 

 ?>