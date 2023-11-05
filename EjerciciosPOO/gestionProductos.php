<?php 

//sistema de Gestion de productos

interface IProducto{
	function obtenerNombre();
	function obtenerPrecio();
}

abstract class ProductoBase implements IProducto{

	protected string $nombre;
	protected float $precio;
	
	public function __construct(string $nombre,float $precio){
		$this->nombre = $nombre;
		$this->precio = $precio;
	}

}

class ProductoFisico extends ProductoBase{

	protected float $peso;
	const PESOFIJO = 50;

	public function __construct($nombre,$precio,$peso){
		parent::__construct($nombre,$precio);
		$this->peso = $peso;

	}

	public function obtenerNombre()
	{
		return $this->nombre;
	}

	public function obtenerPrecio(): float {
        // Cálculo ficticio del precio para un producto físico
        $costoBase = $this->precio;
        $costoPorPeso = $this->peso * 2; // Por ejemplo, $2 por kilogramo
        return $costoBase + $costoPorPeso;
    }
}

class ProductoDigital extends ProductoBase{
	protected float $tamanio;

	public function obtenerNombre()
	{
		return $this->nombre;
	}

	public function obtenerPrecio(): float {
        // Cálculo ficticio del precio para un producto digital
        $costoBase = $this->precio;
        $costoPorTamanio = $this->tamanio * 0.1; // Por ejemplo, $0.1 por megabyte
        return $costoBase + $costoPorTamanio;
    }
}