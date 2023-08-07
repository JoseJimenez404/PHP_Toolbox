<?php

// for (inicialización; condición; incremento o decremento) {
//     // Código a ejecutar en cada iteración del bucle
// }


// ----- Calculadora de Potencias

// $base = readline("Ingresa la base");
// $limite = readline("Ingresa el limite");

// for ($i = 0; $i <= $limite; $i++) {
//     $potencia = pow($base, $i);
//     echo "El resultado de $base elevado a la potencia $i es: $potencia \n";
// }

$daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

for ($i = 1; $i <= 365; $i++) {
    $dayIndex = ($i - 1) % 7; // Calcula el índice del array de días
    $day = $daysOfWeek[$dayIndex]; // Obtiene el día correspondiente al índice
    echo "Day {$i}: {$day}" . "<br>";
}


?>
