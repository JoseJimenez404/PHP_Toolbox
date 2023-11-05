<?php

class Saiyajin{
	
	public $clase = "Saiyayin";
	public static $cabello = "azul";
	public String $nombre;
	public int $nivel_pelea;
	//constructor mas corto
	public function __construct(
		$nombre,$nivel_pelea
	)
	{
		$this->nombre = $nombre;
		$this->nivel_pelea = $nivel_pelea;
	}
	//aseguramos que si o si se devuelva un string : String
	//se puede establecer un parametro por defecto = "hola soy "
	public function Saludar($texto = "hola soy"): String{
		return "$texto {$this->nombre} <br>";
	}

	public function NivelDePelea(){
		return $this->nombre." Tiene un nivel de pelea de: ".$this->nivel_pelea."<br> y pertenece a la clase {$this->clase}";
	}


}





