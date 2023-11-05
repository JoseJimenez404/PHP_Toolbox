<?php 

class Equipo{
	
	protected string $nombre;
	protected string $fundacion;
	protected string $estadio;
	protected string $entrenador;
	protected array $jugadores;

	public function __construct($nombre,$fundacion,$estadio,$entrenador,$jugadores)
	{
		$this->nombre = $nombre;
		$this->fundacion = $fundacion;
		$this->estadio = $estadio;
		$this->entrenador = $entrenador;
		$this->jugadores = $jugadores;
	}

	public function mostrarInformacion(){

		$infoequipo = "Nombre del Equipo :".$this->nombre.
		",fundado en el año :".$this->fundacion.
		"</br>"." Estadio : ".$this->estadio.
		"</br>"."Director tecnico a cargo: ".$this->entrenador."<br>".
		"</br>".
		"Jugadores : "."<br>";

		if(!empty($this->jugadores)){
			$number = 1;
			foreach ($this->jugadores as $names){
				$infoequipo .= "Jugador # ".$number."</br>".
				"Nombre :".$names['nombre']."</br>".
				"Posicion :".$names['posicion']."<br>";
				$number ++;
			}
		}else{
			$infoequipo .= "Aun no hay jugadores agregados"."<br>";
		}

		return $infoequipo;
		

	}
}

class EquipoNacional extends Equipo{
	protected string $seleccionNacional;

	public function __construct($nombre,$fundacion,$estadio,$entrenador,$jugadores,$seleccionNacional)
	{
		parent::__construct($nombre,$fundacion,$estadio,$entrenador,$jugadores);
		$this->seleccionNacional = $seleccionNacional;
	}

	public function mostrarInformacion()
	{
		return parent::mostrarInformacion().
		       "Tipo de equipo Nacional: ".$this->seleccionNacional;
	}
}

class EquipoLocal extends Equipo{
	protected string $ciudad;

	public function __construct($nombre,$fundacion,$estadio,$entrenador,$jugadores,$ciudad)
	{
		parent::__construct($nombre,$fundacion,$estadio,$entrenador,$jugadores);
		$this->ciudad = $ciudad;
	}

	public function mostrarInformacion()
	{
		return  parent::mostrarInformacion().
				"Tipo de equipo Local: ".$this->ciudad;
	}
}
$jugadores = [
	["nombre" => "Santiago Jimenez", "posicion" => "Delantero"],
	["nombre" => "Chuki Lozano", "posicion" => "Delantero"],
];
$nacional = new EquipoNacional("Mexico",1885,"Akron","Almeyda",$jugadores,"Mexico");
echo $nacional->mostrarInformacion();