<?php 
/*
*todo Taller métodos arrays
*Punto 7
*/
$naves = array(
    "nave 1" => "Apolo 11",
    "nave 2" => "Infinity",
    "nave 3" => "Serenity",
    "nave 4" => "Enterprise",
    "nave 5" => "Prometheus"
);

if (in_array("Infinity",$naves )){
    echo "La nave existe";
}
else {echo "No existe la nave"; };

?>
