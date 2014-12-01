<?php 
	if (isset($_GET["enviar_btn"])) {
		echo "Los datos los enviaste  por el método GET, los datos son:<br><br>El nombre es:".$_GET["nombre_txt"];	
		echo "<br>El password es: ".$_GET["password_txt"];
	} elseif (isset($_POST["enviar_btn"])) {
		echo "Los datos los enviaste  por el método POST, los datos son:<br><br>El nombre es:".$_POST["nombre_txt"];	
		echo "<br>El password es: ".$_POST["password_txt"];
	}

 ?>