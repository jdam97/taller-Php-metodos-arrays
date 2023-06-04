<?php 
/*
*Taller métodos arrays
*Punto 2
*/

$planetas = array();
for ($i=0; $i<$_POST["nplanetas"]; $i++){
    $key = "Planeta #".$i;
    $valor = "Deshabitado";
    $planetas[$key] = $valor;
};

print_r($planetas);
?>
