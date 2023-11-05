<?php

$a =   7;
$x = 10;
$y = 9;
$z = 7;

//aqui estamos usando a $a, y estamos diciendo si a es igual a x, si a es igual a y, y si a es igual a z, si ninguno coincide, marca lo que esta por default

//NOTA: match hace comparacion de identidad, tanto del valor y el tipo de dato
$resultado = match($a){
  $x => "valor igual a x"
};


//estructura :

// $resultado = match ($valor) {
//     $opcion1 => $resultado_opcion1,
//     $opcion2 => $resultado_opcion2,
//     // Agrega más opciones aquí si es necesario
//     default => $resultado_defecto,
// };


// function sonidoAnimal($animal){
// 	$result = match($animal){
// 		"PERRO" => "Guau Guau",
// 		"GATO" => "Miau Miau",
// 		default => " Ruidoooo"
// 	};
// 	return $result;
// }
// $animal = "PERRO";
// echo sonidoAnimal($animal);

