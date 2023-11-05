<?php


while(True){
	echo "
----------------------------------------------------------
---- BIENVENIDO AL SISTEMA DE INDICE DE MASA CORPORAL ---- ---------------------------------------------------------- \n
	";
	$peso = (int)readline("Porfavor ingresa tu peso");
	if(!is_numeric($peso)){
		echo "Solo Aceptamos numeros \n";
		$peso = (int)readline("Porfavor ingresa tu peso");
	}
	if($peso <=0){
		echo "solo aceptamos numeros positivos, mayor a cero\n";
		$peso = (int)readline("Porfavor ingresa tu peso");
	}
	$altura = (int)readline("Porfavor ingresa tu altura");
	if(!is_numeric($altura)){
		echo "Solo Aceptamos numeros \n";
		$peso = (int)readline("Porfavor ingresa tu altura");
	}
	if($altura <=0){
		echo "solo aceptamos numeros positivos, mayor a cero\n";
		$peso = (int)readline("Porfavor ingresa tu altura");
	}

	echo "
	----------------------------------------------------
	--------- - - -   Calculando tu IMC - - - ----------
	----------------------------------------------------\n";

	$IMC = $peso/($altura * $altura);
	echo "Tu IMC = {$IMC} \n";

	if($IMC <18.5){
		echo "bajo peso \n";
	}elseif($IMC >18.5 && $IMC <24.9){
		echo "Peso normal";
	}elseif($IMC >25.0 && $IMC <29.9){
		echo "Sobrepeso";
	}elseif($IMC >30.0){
		echo "ponle cuidado, estas en sobrepeso";
	}

	$nuevamente = readline("Deseas volver a calcular tu masa");
	if($nuevamente != "no" || $nuevamente != "si"){
		echo "ingresa solo 'si' o 'no'";
		$nuevamente = readline("Deseas volver a calcular tu masa");
		if($nuevamente == "no"){
			echo "vuelve pronto";
			exit(0);
		}
	}

}

