<?php

class Vehicles{
	

	public function __construct(
		protected string $brand,
		protected string $model,
		protected int $year,
		protected float $price
	){}

	public function showInformation(){
		return  "Vehiculo :"."<br>".
				"Brand : ".$this->brand."<br>".
				"Model : ".$this->model."<br>".
				"Year : ".$this->year."<br>".
				"Price : $".$this->numberDesglose()."<br>";
	}

	protected function numberDesglose(){
		$numberFormat = number_format($this->price,2,'.',',');
		return $numberFormat;
	}
}

class Automovil extends Vehicles{
	protected string $type;

	public function __construct($brand,$model,$year,$price,$type){
		parent::__construct($brand,$model,$year,$price);
		$this->type = $type;
	}

	public function typeBrand() {
        $tipoMensajes = [
            "sedán" => "El auto es un Sedán",
            "deportivo" => "El auto es de tipo deportivo",
            "camioneta" => "El auto es una camioneta"
		];

        return isset($tipoMensajes[$this->type]) ? $tipoMensajes[$this->type] : "Tipo de automóvil desconocido";
    }

	public function calculateTax(){
		
		return ($this->type == "deportivo") ? ($this->price * .15):(($this->type == "sedán" || $this->type == 'camioneta') ?($this->price * .10): $this->price * .5);
	}

	

}

class Motorcicle extends Vehicles{
	protected float $cilindrada;

	public function __construct($brand,$model,$year,$price,$cilindrada){
		parent::__construct($brand,$model,$year,$price);
		$this->cilindrada = $cilindrada;
	}

	public function cilindrada(){

	}

	public function calculateTax(){
		return ($this->price *5)/100;
	}
}

$vehicle = new Automovil("porche","porche0021",2000,520355,"sedán");
echo $vehicle->showInformation();
echo $vehicle->calculateTax();
echo $vehicle->typeBrand();