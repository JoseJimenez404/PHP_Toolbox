<?php
//estructura :

// $resultado = match ($valor) {
//     $opcion1 => $resultado_opcion1,
//     $opcion2 => $resultado_opcion2,
//     // Agrega más opciones aquí si es necesario
//     default => $resultado_defecto,
// };


function sonidoAnimal($animal){
	$result = match($animal){
		"PERRO" => "Guau Guau",
		"GATO" => "Miau Miau",
		default => " Ruidoooo"
	};
	return $result;
}
$animal = "PERRO";
echo sonidoAnimal($animal);

