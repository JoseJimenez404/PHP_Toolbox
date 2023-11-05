<?php

abstract class Automovil{
	protected string $modelo;
	protected string $color;
	protected int $potencia;
	protected float $espacio;

	public function __construct(string $modelo, string $color, int $potencia, string $espacio)
	{
		$this->modelo = $modelo;
		$this->color = $modelo;
		$this->potencia = $modelo;
		$this->espacio = $modelo;
	}

	function  mostrarcaracteristicas(){}
}


class AutomovilElectrico extends Automovil{

	public function __construct(string $modelo, string $color, int $potencia, string $espacio)
	{
		
	}
}


class AutomovilGasolina extends Automovil{

}


