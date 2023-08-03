
<?php 

$datos = array(
    array('id' => 1, 'nombre' => 'Electrónicos', 'padre_id' => 0),
    array('id' => 2, 'nombre' => 'Ropa', 'padre_id' => 0),
    array('id' => 3, 'nombre' => 'Celulares', 'padre_id' => 1),
    array('id' => 4, 'nombre' => 'Laptops', 'padre_id' => 1),
    array('id' => 5, 'nombre' => 'Camisetas', 'padre_id' => 2),
    array('id' => 6, 'nombre' => 'Pantalones', 'padre_id' => 2),
    array('id' => 7, 'nombre' => 'iPhone', 'padre_id' => 3),
    array('id' => 8, 'nombre' => 'Samsung', 'padre_id' => 3),
);

/* 
 En este ejemplo, cada elemento del arreglo representa una categoría o subcategoría de productos.
 Los elementos con 'padre_id' igual a 0 son categorías principales (nodos raíz), mientras que los demás elementos están 
 relacionados con sus respectivas categorías principales a través de sus 'padre_id'.
*/

// Reestructuramos esto en una clase nodo
class Nodo {
    public $id;
    public $nombre;
    public $hijos = array();

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}

function construirArbol($datos, $padre_id = 0) {
    $arbol = array();
    foreach ($datos as $dato) {
        if ($dato['padre_id'] == $padre_id) {
            $nodo = new Nodo($dato['id'], $dato['nombre']);
            $nodo->hijos = construirArbol($datos, $dato['id']);
            $arbol[] = $nodo;
        }
    }
    return $arbol;
}

$arbol = construirArbol($datos);


?>