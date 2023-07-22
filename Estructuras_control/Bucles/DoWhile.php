<?php 

// do {
//     // Bloque de código a ejecutar
// } while (condición);

// --------------- JUEGO 1, ADIVINAR NUMERO ALEATORIO -----------------------------
// class AdivinaNumero {
//     private int $numeroSecreto;
//     private int $intentos;

//     public function __construct() {
//         $this->numeroSecreto = rand(1, 100);
//         $this->intentos = 0;
//     }

//     public function jugar() {
//         do {
//             $this->intentos++;
//             $numeroIngresado = (int) readline("Intento #" . $this->intentos . ": Ingresa un número entre 1 y 100: ");
// 			if(!is_string($numeroIngresado)){
// 				echo "deves de ingresar solamente numeros enteros";
// 				return ;
// 			}

//             if ($numeroIngresado == $this->numeroSecreto) {
//                 echo "¡Felicidades! Adivinaste el número secreto (" . $this->numeroSecreto . ") en " . $this->intentos . " intentos." . PHP_EOL;
//                 break;
//             } elseif ($numeroIngresado < $this->numeroSecreto) {
//                 echo "El número secreto es mayor que " . $numeroIngresado . "." . PHP_EOL;
//             } else {
//                 echo "El número secreto es menor que " . $numeroIngresado . "." . PHP_EOL;
//             }

//         } while (true);
//     }
// }

// $adivinaNumero = new AdivinaNumero();
// $adivinaNumero->jugar();








?>