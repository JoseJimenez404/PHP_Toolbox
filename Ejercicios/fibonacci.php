<?php

/* Define una función llamada fibonacci que acepte un parámetro $n que representará la cantidad de términos de la secuencia de Fibonacci que deseas generar.

Crea un array llamado $fibSequence que contendrá los valores de la secuencia de Fibonacci. Inicialízalo con los dos primeros términos: 0 y 1.

Utiliza un bucle for o while para calcular los siguientes términos de la secuencia de Fibonacci y añadirlos al array $fibSequence. El bucle debe ejecutarse desde el tercer término hasta el número $n-ésimo.

Para calcular el siguiente término de Fibonacci, suma los dos últimos elementos del array $fibSequence y guarda el resultado en una variable temporal.

Añade el valor de la variable temporal al final del array $fibSequence */



function fibonacci($n) {
    $fibSequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $nextTerm = $fibSequence[$i - 1] + $fibSequence[$i - 2];
        $fibSequence[] = $nextTerm;
    }

    return $fibSequence;
}

// Ejemplo de uso: obtener los primeros 10 términos de la secuencia de Fibonacci
