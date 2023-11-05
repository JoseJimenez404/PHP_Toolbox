<?php


class Calculadora{
	
	//esta clase sirve para realizar alguna operacion con un array.

	//este metodo valida que si es un array, pero dentro de el contiene un numero,
	//este lo convierte a flotante, luego, si no es un flotante o entero devuelve false
	//esto para que el usuario sepa que no hay esos valores.
	private function validarArrays(array $array){
		foreach ($array as &$valor){
			if (is_string($valor) && preg_match('/^\d+(\.\d+)?$/', $valor)) {
				$valor = (float) $valor;
			} else if (!is_int($valor) && !is_float($valor)) {
				return false;
			}
		}
		unset($valor); // Desreferenciar el último elemento modificado
	
		return true;
	}
	
	//valida que minimo haya 2 valores para realizar alguna operacion
	private function validarOperaciones(array $array){
		if(count($array) <2){
			return false;
		}
		return true;
	}
	public function calcularSuma(array $numeros) {
		
		if($this->validarArrays($numeros) != true){
			return "para poder hacer la suma solo se aceptan numeros enteros o con decimales.";
		}
		if($this->validarOperaciones($numeros) != true){
			return "para poder hacer una suma, se necesitan minimo 2 numeros";
		}
		$total = 0;
		foreach($numeros as $valores){
			$total += $valores;
		}
		return ((float)$total);
	}


	public function calcularPromedio(array $numeros){
		if($this->validarArrays($numeros) != true){
			return "para poder calcular el promedio solo se aceptan numeros enteros o con decimales.";
		}
		if($this->validarOperaciones($numeros) != true){
			return "para poder calcular el promedio, se necesitan minimo 2 numeros";
		}
		$total = 0;
		foreach($numeros as $valores){
			$total += $valores;
		}
		$cantidad = count($numeros);
		return  ((float)$total/$cantidad);

	}


	public function encontrarMaximo(array $numeros) {
		if($this->validarArrays($numeros) != true){
			return "para poder encontrar el calor maximo, solo se aceptan numeros enteros o con decimales.";
		}
		$val = max($numeros);
		return $val;
	}

	

	public function encontrarMinimo(array $numeros) {
		if($this->validarArrays($numeros) != true){
			return "para poder encontrar el calor maximo, solo se aceptan numeros enteros o con decimales.";
		}
		$val = min($numeros);
		return $val;
	}
}

$calculadora = new Calculadora;
echo $calculadora->calcularSuma([1.1]);
// echo $calculadora->calcularPromedio([1,5,6,"s"]);
// echo $calculadora->encontrarMinimo([1,5,7,8,9,"1"]);



//usar while para imprimir en pantalla los numero pares del array que se pase