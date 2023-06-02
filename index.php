<?php 
/**
 * todo Punto 1 taller arrays
 * *Crear array planetas
 * *buscar a 'Marte
 */
 $planetas = array(
    'Sol' =>0,
    'Mercurio' => 1,
    'Venus' => 2,
    'Tierra' => 3,
    'Marte' => 4,
    'JUpiter' => 5,
    'Saturno' => 6,
    'Urano' => 7,
    'Neptuno' => 8
);

/**
 * uso array_flip() para voltear el array y que el valor sea la llave, ya que el ejercicio me pide buscar por número de planeta
 */

$new_planetas = array_flip($planetas);
print_r($new_planetas);
echo "<br>";
echo "<br>";
echo array_search(4,$planetas);
















?>