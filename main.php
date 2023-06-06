<?php 
/*
*todo Taller métodos arrays
*Punto 10
*/
$viaLactea =  array(
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano"
);

$otraGalaxia =  array(
    "planeta1",
    "planeta2",
    "planeta3",
    "Tierra",
    "Jupiter",
    "Saturno",
    "planeta7",
    "planeata8",
    "Mercurio",
);

$resultado = array_intersect($viaLactea,$otraGalaxia);
print_r($resultado);

?>
