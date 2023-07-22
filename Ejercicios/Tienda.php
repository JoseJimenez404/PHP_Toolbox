<?php
//productos electronicos
class Tienda {
    protected string $nombre;
    protected array $productos;

    public function __construct(string $nombre, array $productos) {
        $this->nombre = $nombre;
        $this->productos = $productos;
    }

    public function verInventario() {
        foreach ($this->productos as $producto) {
            echo "Nombre: " . $producto['nombre'] . ", Precio: " . $producto['precio'] . ", Stock: " . $producto['stock'] . "</br>";
        }
    }

    public function buscarProducto(string $nombreProducto) {
        foreach ($this->productos as $producto) {
            if ($producto['nombre'] === $nombreProducto) {
                echo "Nombre: " . $producto['nombre'] . ", Precio: " . $producto['precio'] . ", Stock: " . $producto['stock'] . "</br>";
                return;
            }
        }

        echo "El producto '$nombreProducto' no está disponible en la tienda." . "</br>";
    }
}

$productos = [
    ["nombre" => "Laptop", "precio" => 1500, "stock" => 10],
    ["nombre" => "Teléfono", "precio" => 800, "stock" => 5],
    ["nombre" => "Tablet", "precio" => 400, "stock" => 3],
    ["nombre" => "Smartwatch", "precio" => 200, "stock" => 8],
    ["nombre" => "Cámara", "precio" => 1000, "stock" => 2]
];

$tienda = new Tienda("ElectroStore", $productos);

echo "Inventario de la tienda:" . "</br>";
$tienda->verInventario();

echo "Buscar producto 'Teléfono':" . "</br>";
$tienda->buscarProducto("Teléfono");

echo "Buscar producto 'Monitor':" . "</br>";
$tienda->buscarProducto("Monitor");
