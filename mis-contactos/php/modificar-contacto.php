<?php 
// Asigno a variables php los valores que vienen del formulario
// Como el campo del email está deshabilitado en el form, php no lo reconoce, por eso tengo que guardar su valor en un campo oculto
$email = $_POST["email_hdn"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];

include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if ($num_regs==1)
{
	// Si la foto viene vacía asignamos el valor del botón oculto de la foto, que tiene el valor anterior a la búsqueda, si no, subo la nueva foto y reemplazo el valor
	if (empty($_FILES["foto_fls"]["tmp_name"]))
	{
		$imagen = $_POST["foto_hdn"];
	}
	else
	{
		// Se ejecuta la función para subir la imagem
		include("funciones.php");
		$tipo = $_FILES["foto_fls"]["type"];
		$archivo = $_FILES["foto_fls"]["tmp_name"];
		$imagen = subir_imagen($tipo,$archivo,$email);
	}

	// Actualizo los datos de la BD
	$consulta = "UPDATE contactos SET nombre='$nombre', sexo='$sexo', nacimiento='$nacimiento', telefono='$telefono', pais='$pais', imagen='$imagen' WHERE email='$email'";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

	if ($ejecutar_consulta)
	{
		$mensaje = "Se han hecho los cambios del contacto con el email <b>$email</b>";
	}
	else
	{
		$mensaje = "No se pudieron hacer los cambios del contacto <b>$email</b>";
	}

}
else
{
	$mensaje = "No se pudieron hacer los cambios en los datos del contacto con el email <b>$email</b>";
}
$conexion->close();
header("Location: ../index.php?op=cambios&mensaje=$mensaje");


 ?>