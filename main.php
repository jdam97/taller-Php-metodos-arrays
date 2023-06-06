<?php 
/*
*todo Taller métodos arrays
*Punto 13
*/
$planetas =  array(
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano",
    "Neptuno",
);

$resultado = array_reverse($planetas,true);
echo "Array original:";
print_r($planetas);
echo "<br>";
echo "Array reverso:";
print_r($resultado);
?>
