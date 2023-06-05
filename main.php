<?php 
/*
*todo Taller métodos arrays
*Punto 6
*/

$planetas = ["Mercury", "Venus", "Tierra", "Marte", "Jupiter", "Saturno","Urano","Neptuno"];

if (in_array("Tierra",$planetas )){
    echo "El planeta existe";
}
else {echo "No existe dentro del sistema solar"; };

?>
