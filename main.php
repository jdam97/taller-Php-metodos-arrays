<?php 
/*
*todo Taller métodos arrays
*Punto 4
*debo hacer la funcion antes de usar el map
*/

$gplanetas = array (
    'Sol' => 1/3,
    'Mercurio' => 1/4,
    'Venus' => 2/3,
    'Marte' => 4/8,
    'Jupiter' => 7/10,
    'Saturno' => 6/8,
    'Urano' => 2/3,
    'Neptuno' => 1/10
);

function calcular_gravedad($value,$key){
    $gravedad_tierra = 9.8;
    echo "El $key tiene una gravedad de: ". $value*$gravedad_tierra."<br>";

};

array_walk($gplanetas,"calcular_gravedad");
?>
