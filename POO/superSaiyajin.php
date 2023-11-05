<?php



class SuperSaiyajin extends Saiyajin{
	public $clase = "Super Saiyayin";

	function Transformacion(){
		return $this->nivel_pelea >= 1500 ? $this->nombre."se transformo en {$this->clase}": $this->nombre." no se pudo transformar  en :{$this->clase}";
	}

	public function NivelDePelea(){
		$nivel = $this->nivel_pelea * 2;
		return "Se aumento el nivel de pelea a {$nivel}";
	}
}