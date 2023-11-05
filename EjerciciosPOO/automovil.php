<?php

abstract class Automovil
{
    function __construct(
        protected $marca,
        protected $precio,
        protected $pais
    ) {}

    abstract function obtenerInfo();
    abstract function obtenerPrecio();
}

class AutomovilElectrico extends Automovil {
    protected $calculadora;

    public function __construct($marca, $precio, $pais, Calculadora $calculadora) {
        parent::__construct($marca, $precio, $pais);
        $this->calculadora = $calculadora;
    }

    public function obtenerInfo() {
        return "Automóvil eléctrico: Marca: $this->marca, País: $this->pais";
    }

    public function obtenerPrecio() {
        $precioTotal = $this->calculadora->sumar($this->precio, 500); // Cambiar el valor 500 según tus necesidades
        return "Precio total: $" . $precioTotal;
    }
}

class Calculadora {
    public function sumar(int | float $numeroUno, int | float $numeroDos) {
        return $numeroUno + $numeroDos;
    }

    public function restar(int | float $numeroUno, int | float $numeroDos) {
        return $numeroUno - $numeroDos;
    }

    public function dividir(int | float $numeroUno, int | float $numeroDos) {
        return $numeroUno / $numeroDos;
    }

    public function multiplicar(int | float $numeroUno, int | float $numeroDos) {
        return $numeroUno * $numeroDos;
    }
}

$prueba = new Calculadora();
$auto = new AutomovilElectrico("BMW", 5000, "Alemania", $prueba);
echo $auto->obtenerInfo() . "\n";
echo $auto->obtenerPrecio();
