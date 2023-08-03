<?php

function calcularPromedio(array $calificaciones){
	$sumaCalificaciones = 0;
	$asignaturas = count($calificaciones);
	if($asignaturas == 0){
		return " No se puede obtener la calificacion por que no hay datos";
	}
	
	foreach ($calificaciones as $calificaciones){
		
		if(!is_int($calificaciones) && !is_float($calificaciones)){
			exit("Solo se permiten datos numericos y flotantes");
		}
		$sumaCalificaciones += $calificaciones; 
		

	}
	$calificacionFinal = $sumaCalificaciones/$asignaturas;
	return $calificacionFinal;
}

$mike =[];
echo calcularPromedio($mike);

?>