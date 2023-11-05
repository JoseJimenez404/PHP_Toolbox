<?php

class BuscadorDeArray {
    private $datos;

    public function __construct($array) {
        // Valida los valores del array al construir la instancia del buscador
        $validacion = $this->validarValoresArray($array);
        if ($validacion !== true) {
            exit("Error: El valor '{$validacion['valor']}' en '{$validacion['clave']}' contiene los signos ;,().");
        }
        $this->datos = $array;
    }

    public function buscar($ruta) {
        // Divide la ruta en claves individuales usando la flecha "->"
        $claves = explode("->", $ruta);
        // Realiza la búsqueda recursiva en los datos utilizando las claves
        $resultado = $this->buscarRecursivamente($this->datos, $claves);
        // Obtiene el resultado final formateado
        return $this->obtenerResultado($resultado);
    }

    private function buscarRecursivamente($array, $claves) {
        $resultado = [];
        // Obtiene la primera clave de la lista y la remueve del arreglo de claves
        $claveActual = array_shift($claves);

        // Verifica si la clave existe en el arreglo actual
        if (isset($array[$claveActual])) {
            $valor = $array[$claveActual];
            // Si no hay más claves, se agrega el valor al resultado
            if (empty($claves)) {
                $resultado[] = is_array($valor) ? $valor : $claveActual . ': ' . $valor;
            }
            // Si el valor es un arreglo, se realiza una búsqueda recursiva con las claves restantes
            elseif (is_array($valor)) {
                $resultado = $this->buscarRecursivamente($valor, $claves);
            }
        }

        return $resultado;
    }

    private function obtenerResultado($resultados) {
        // Verifica si hay resultados y los devuelve, de lo contrario, devuelve un mensaje de no encontrado
        if (!empty($resultados)) {
            return $resultados;
        } else {
            return ["No se encontró el dato buscado."];
        }
    }

    private function validarValoresArray($array, $clave = null) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                // Realiza una validación recursiva si el valor es un arreglo
                $validacion = $this->validarValoresArray($value, $clave !== null ? "{$clave}['{$key}']" : $key);
                if ($validacion !== true) {
                    return $validacion;
                }
            } else {
                // Verifica si el valor contiene alguno de los caracteres no válidos
                if (preg_match('/[;,()]/', $value)) {
                    return ['clave' => $clave !== null ? "{$clave}['{$key}']" : $key, 'valor' => $value];
                }
            }
        }
        return true;
    }
}

// Creación del arreglo de datos
$Royal = [
    "titular1" => ["nombre" => "Jose", "Telefono" => 9984857108],
    "titular2" => ["nombre" => "Pedro", "Telefono" => 9984857108],
    "reservacion" => [
        "destino" => ["hotel" => "el caribe", "habitaciones" => 5],
        "transporte" => [
            "sedan" => ["precio" => 1200, "asientos" => 4],
            "mercedes" => ["precio" => 1800, "asientos" => 6]
        ]
    ]
];


$futbol = [
    "jugadores" =>[
        "jugador_one"=>["nombre"=>"messi", "edad"=>20],            
        "sueldos"=>[
            "veteranos"=>1800,
            "novatos"=>1550,
        ]

    ]
];


// Creación de una instancia del buscador
$buscador = new BuscadorDeArray($futbol);
// Búsqueda de la ruta especificada
$resultado = $buscador->buscar("jugadores->sueldos->veteranos");
print_r($resultado);










// una funcion que valide al array, que los recorra, sea el array que sea