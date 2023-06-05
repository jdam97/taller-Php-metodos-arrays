<?php 
/*
*todo Taller métodos arrays
*Punto 5
*/

$naves = array(
    "apolo" => 2,
    "La estrella de la muerte" => 10,
    "sputnik" => 5,
    "artemis" => 8
);

function sumar ($naves){
    $total = array_sum($naves);
    return $total;
};
$resultado = sumar($naves);
print "Masa total de todas las naves: ".$resultado;
?>
