<?php

// for (inicialización; condición; incremento o decremento) {
//     // Código a ejecutar en cada iteración del bucle
// }


// ----- Calculadora de Potencias

$base = readline("Ingresa la base");
$limite = readline("Ingresa el limite");

for ($i = 0; $i <= $limite; $i++) {
    $potencia = pow($base, $i);
    echo "El resultado de $base elevado a la potencia $i es: $potencia \n";
}
?>
