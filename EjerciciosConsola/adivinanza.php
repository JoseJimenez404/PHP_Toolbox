<?php


$numAleatorio = rand(1,100);
$intentos = 0;


echo "BIENVENIDO AL JUEGO DE ADIVINAR EL NUMERO ALEATORIO\n";

while(True){
	$numero = (int) readline("ingresa un numero");
	if($numAleatorio < $numero){
		echo "el numero a adivinar es menor al que ingresaste ";
		$intentos ++;
	}elseif($numAleatorio > $numero){
		echo "el numero a adivinar es mayor al que ingresaste";
		$intentos ++ ;
	}
	elseif($numAleatorio == $numero){
		$intentos ++;
		echo "felicidades, has adivinado en el intento: {$intentos}";
		echo "El numero a adivinar era {$numAleatorio}";
	}

}