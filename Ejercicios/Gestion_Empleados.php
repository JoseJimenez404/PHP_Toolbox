<?php

class Empleado
{
	protected string $nombre;
	protected int $edad;
	protected float $salario;

	public function __construct(string $nombre, int $edad, float $salario)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->salario = $salario;
	}

	public function obtenerDetalles()
	{
		return "Nombre: " . $this->nombre . ", Edad: " . $this->edad . ", Salario: " . $this->salario;
	}
}

class EmpleadoTiempoCompleto extends Empleado
{
	protected int $horasTrabajadas;

	public function __construct(string $nombre, int $edad, float $salario, int $horasTrabajadas)
	{
		parent::__construct($nombre, $edad, $salario);
		$this->horasTrabajadas = $horasTrabajadas;
	}

	public function obtenerDetalles()
	{
		return parent::obtenerDetalles() . ", Horas Trabajadas: " . $this->horasTrabajadas;
	}
}

class EmpleadoMedioTiempo extends Empleado
{
	protected int $horasTrabajadas;

	public function __construct(string $nombre, int $edad, float $salario, int $horasTrabajadas)
	{
		parent::__construct($nombre, $edad, $salario);
		$this->horasTrabajadas = $horasTrabajadas;
	}

	public function obtenerDetalles()
	{
		return parent::obtenerDetalles() . ", Horas Trabajadas: " . $this->horasTrabajadas;
	}
}

class Empresa
{
	protected string $nombre;
	protected array $empleados;

	public function __construct(string $nombre)
	{
		$this->nombre = $nombre;
		$this->empleados = [];
	}

	public function obtenerNombreEmpresa()
	{
		return $this->nombre;
	}

	public function contratarEmpleado(Empleado $empleado)
	{
		$this->empleados[] = $empleado;
	}

	public function obtenerListaEmpleados()
	{
		$listaEmpleados = "Lista de empleados:\n";
		foreach ($this->empleados as $empleado) {
			$listaEmpleados .= "- " . $empleado->obtenerDetalles() . "\n";
		}
		return $listaEmpleados;
	}

	public function detallesEmpleados()
	{
		$detallesEmpleados = [];
		foreach ($this->empleados as $empleado) {
			$detallesEmpleado = $empleado->obtenerDetalles();
			$detallesEmpleados[] = $detallesEmpleado;
		}
		return $detallesEmpleados;
	}
}

