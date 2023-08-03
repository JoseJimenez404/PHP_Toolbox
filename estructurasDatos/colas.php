
<?php 
// EStructura de datos lineal que sigue el principio:
// "primero en entrar, primero en salir"

class Cola{
	private array $datos;

	public function __construct(){
		$this->datos = [];
	}

	// ****** manera 1 de agregar datos al array, si recibe un array como tal
	//usando el operador (spread operator)
	/* public function dequeue(array $elemento){
		// $this->datos [] = $elemento; 
		array_push($this->datos,...$elemento);
	} */


	//metodo numero 2, Primero verifica si es un array, si lo es, recorre el array, y agrega cada valor al array de datos, si no es un array, agrega todos los valores de una.
	public function agregarElemento($elemento) {
        if (is_array($elemento)) {
            foreach ($elemento as $value) {
                $this->datos[] = $value;
            }
        } else {
            $this->datos[] = $elemento;
        }
    }

	public function eliminarElemento()
	{
		$valor = array_shift($this->datos);
		return $valor;

	}

	public function verificarContenido(){
		//el metodo empty devuelve tru y false, si necesitar indicarle
		return empty($this->datos);
	}

	public function contarElementos(){
		$elementos = count($this->datos);
		return $elementos;
	}
	public function mostrarFuncionamiento(){
		foreach($this->datos as $values){
			echo "numero :".$values." <br>";
		}
	}
}


$numero = [1];
$numero2 = [2];
$cola = new Cola();
$cola->agregarElemento($numero2);
$cola->agregarElemento($numero);
$cola->mostrarFuncionamiento();