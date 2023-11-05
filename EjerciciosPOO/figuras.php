<?php 

interface Figuras{
	function obtenerPerimetro();
	function obtenerArea();
}

class Cuadrado implements Figuras{
	protected int $lado;

	public function __construct($lado)
	{
		$this->lado = $lado;
	}

	function obtenerPerimetro(): float{
		return $this->lado * 4;
	
	}
	function obtenerArea(){
		return $this->lado * $this->lado;
	}

	
}

$cuadrado = new Cuadrado(5);
echo "El area del cuadrado es : ".$cuadrado->obtenerArea()."<br>";
echo "El perimetro del cuadrado es : ".$cuadrado->obtenerPerimetro();