<?php 
/*
*todo Taller métodos arrays
*Punto 3
*/
$planetas = array (
    'Sol' =>false,
    'Mercurio' => false,
    'Venus' => false,
    'Tierra' => true,
    'Marte' => true,
    'Jupiter' => false,
    'Saturno' => true,
    'Urano' => false,
    'Neptuno' => false
);

$resultado = array_filter($planetas,function ($e){
    if($e ==true){
        return $e;
    };
}); 
print_r($resultado)
?>
