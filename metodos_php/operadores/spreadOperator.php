<?php

// es la de los 3 puntos ...
// se usa especialmente con arrays y argumentos de funciones.


//permite unir de una manera mas sencilla a los arrays, teniendo 2 o mas, en uno solo; ejemplo:


$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];

$arraysUnidos = [...$array1,...$array2];
print_r($arraysUnidos[2]);

//cuando una función espera múltiples argumentos individuales en lugar de un array
/* En este ejemplo, el operador de propagación descompone 
el array $args en tres argumentos individuales y los pasa a la función sum. */

function sum($a, $b, $c) {
    return $a + $b + $c;
}

$args = [2, 4, 6];
$result = sum(...$args);

echo $result; // Mostrará: 12


