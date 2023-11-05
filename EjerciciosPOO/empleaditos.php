<?php 

interface EmpleadoInterface {
	public function obtenerNombre() : string;
	public function calcularSalario() :float;
}

abstract class EmpleadoBase implements EmpleadoInterface{
	protected $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function obtenerNombre(): string
	{
		return $this->nombre;
	}
}

class EmpleadoTiempoCompleto extends EmpleadoBase{
	protected $salarioMensual;

	public function __construct($nombre, $salarioMensual)
	{
		parent::__construct($nombre);
		$this->salarioMensual = $salarioMensual;
	}

	public function calcularSalario() : float
	{
		return $this->salarioMensual;
	}
	
}

class EmpleadoPorHoras extends EmpleadoBase{

	protected $horasTrabajadas;
	protected $tarifaPorHora;

	public function __construct($nombre,$horasTrabajadas,$tarifaPorHora)
	{
		parent::__construct($nombre);
		$this->horasTrabajadas = $horasTrabajadas;
		$this->tarifaPorHora = $tarifaPorHora;
	}


	public function calcularSalario() : float
	{
		$salario = $this->horasTrabajadas * $this->tarifaPorHora;
		return $salario;

	}

}

class CalculadoraSalarios{

	public static function calcularSalarioTotal(array $Empleado){
		$total = 0;
		foreach($Empleado as $names){
			$total += $names->calcularSalario();
		}
		return $total;
	}

}

$empleadoTiempoCompleto = new EmpleadoTiempoCompleto('Juan Perez', 2000);
$empleadoPorHoras = new EmpleadoPorHoras('Maria Gomez', 40, 15);

// Almacenar las instancias en un array
$empleados = [$empleadoTiempoCompleto, $empleadoPorHoras];

// Utilizar la clase CalculadoraSalarios para calcular el salario total
$salarioTotal = CalculadoraSalarios::calcularSalarioTotal($empleados);

// Imprimir el resultado del cálculo del salario total
echo "El salario total de los empleados es: $salarioTotal";




?>


