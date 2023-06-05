<?php 
/*
*todo Taller métodos arrays
*Punto 8
*/
$naves =  array(
"Mercurio",
"Venus",
"Tierra",
"Marte",
"Jupiter"
,"Saturno"
,"Urano");

$resultado = array_rand($naves);
echo $naves[$resultado];

?>
