<?php
// while (condición) {
//     // Código a ejecutar mientras la condición sea verdadera
//     // Puede contener uno o varios bloques de código
// }



// ADIVINAR NUMERO SECRETO:

echo " ----- [ Adivinar número secreto ] ----\n";
echo " !! Si deseas salir del programa pulsa [ x ] !! \n";

// Bucle externo para permitir que el usuario vuelva a jugar después de adivinar correctamente
while (true) {
    // Generar un nuevo número secreto para cada partida
    $number = rand(1, 100);

    // Reiniciar los intentos para cada partida
    $intentos = 0;

    // Bucle interno para solicitar el número al usuario y adivinar el número secreto
    while (true) {
        // Solicitar al usuario un número
        $numberUser = readline("Ingresa un número: ");

        // Salir del programa si el usuario ingresa 'x'
        if ($numberUser === 'x') {
            echo "Saliendo del programa ...\n";
            exit(0);
        }

        // Validar si la entrada es un número
        if (!is_numeric($numberUser)) {
            echo "Solo se aceptan números.\n";
        } else {
            $numberUser = (int)$numberUser; // Convertir la entrada a número entero

            // Validar si el número ingresado está dentro del rango válido
            if ($numberUser < 1 || $numberUser > 100) {
                echo "El número a encontrar está en el rango de 1 a 100.\n";
            } elseif ($numberUser === $number) {
                $intentos++;
                echo "Felicidades, adivinaste el número {$number} en el intento {$intentos}.\n";

                // Preguntar al usuario si desea volver a jugar
                $opcion = readline("¿Deseas volver a jugar? (si/no): ");
                if ($opcion !== 'si') {
                    echo "Gracias por jugar. ¡Hasta luego!\n";
                    exit(0);
                }
                break; // Salir del bucle interno y comenzar una nueva partida
            } elseif ($numberUser < $number) {
                $intentos++;
                echo "El número es mayor que {$numberUser}, intento #{$intentos}.\n";
            } else {
                $intentos++;
                echo "El número es menor que {$numberUser}, intento #{$intentos}.\n";
            }
        }
    }
}

