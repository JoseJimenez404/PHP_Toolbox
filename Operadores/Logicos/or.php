<?php


$valor1 = 7;
$valor2 = 2;


// en este ejemplo estamos evaluando las 3 condiciones, esperando que al menos una de ellas se cumpla.
var_dump($valor1 == 4 || 9>3 || 10<30);

// si evaluamos 

// "Al menos una de las condiciones deve de cumplirse"

// false || false = false 
//false || true = true
//true || false = true
// true || true = true
