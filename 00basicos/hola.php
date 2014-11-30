<?php 
//imprimir en pantalla
echo ("Hola Mundo");
echo "Hola cruel mundo<br>estoy <h1>aprendiendo PHP</h1>";
//variables
$nombre = "Miguel";
$Nombre = "Infernal";

//concatenacion de cadenas y variables
echo $nombre." ".$Nombre;
echo "<br>";

$num1 = 5;
$num2=78;

$suma = $num1 + $num2;

echo $suma;

echo "<br>La variable \$suma tiene el valor de $suma <br>";

$modulo = $num2%2;
if($modulo==0){
	echo "El numero es Par";
}else{
	echo "El numero es Impar";
}
echo "<br>";

for ($i=0; $i <= 10; $i++) { 
	echo $i."<br>";
}

?>