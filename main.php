<?php 
/*
*todo Taller métodos arrays
*Punto 11
*/
$galaxia1 =  array(
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano"
);

$galaxia2 =  array(
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

$resultado =array_diff($galaxia1,$galaxia2);

$total = array_diff($galaxia2,$galaxia1);
echo "Galaxia 1: ";
print_r($resultado);
echo "<br>";
echo "Galaxia 2: ";
print_r($total);
?>
