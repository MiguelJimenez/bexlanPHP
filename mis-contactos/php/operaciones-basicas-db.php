<?php 
$conexion = mysql_connect("localhost", "root", "") or die("No se pudo conectar con el servidor de BD");
echo "Conectado al servidor de BD MySQL<br>";

mysql_select_db("mis_contactos") or die("No se pudo seleccionar la BD<br>");
echo "BD seleccionada: <b>mis_contactos</b><br>";

echo "<h1>Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>Insercci&oacute;n de datos</h2>";
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos);
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('maj009@gmail.com','Miguel','M','1978-01-17','654478523','España','miguel.png')";

$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "Se han insertado los datos =)<br>";

echo "<h2>Eliminaci&oacute;n de datos</h2>";
// DELETE FROM nombre_tabla WHERE campo = valor;
$consulta = "DELETE FROM contactos WHERE email = 'maj009@gmail.com'";
$ejecutar_consulta = mysql_query($consulta, $conexion);
echo "Datos eliminados <br>";

echo "<h2>Modificaci&oacute;n de datos</h2>";
// UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor... WHERE campo = valor;
$consulta = "UPDATE contactos SET email='cursos@bextan.com', nombre='Bextlan', imagen='bextlan.png' WHERE email = 'maj_009@gmail.com'";
$ejecutar_consulta = mysql_query($consulta, $conexion);
echo "Los datos han sido modificados <br>";

echo "<h2>Consulta (b&uacute;squedas) de datos</h2>";
// SELECT * FROM nombre_tabla WHERE campo = valor;
$consulta = "SELECT * FROM contactos WHERE email='cursos@bextan.com'";
$ejecutar_consulta = mysql_query($consulta, $conexion);
while ($registro = mysql_fetch_array($ejecutar_consulta)) {
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br>";
}

	/*$registro = mysql_fetch_array($ejecutar_consulta);
	foreach ($registro as $clave => $valor) {
		echo $registro[$clave]."---".$valor."<br>";
	}
*/
mysql_close($conexion);
echo "La conexi&oacute;n se ha cerrado";


 ?>