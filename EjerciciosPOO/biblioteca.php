<?php 

class Biblioteca{

	protected string $nombre;
	protected array $libros;

	public function __construct($nombre,$libros)
	{
		$this->nombre = $nombre;
		$this->libros = $libros;
	}

	
	public function inventario() : string{

		$librillo = "";
		foreach($this->libros as $books){
			$librillo .= "Titulo : ". $books['Titulo']."</br>". 
				 "autor : ". $books['Autor']."</br>". 
				 "genero : ". $books['Genero']."</br>"."<br>";; 
		}
		
		return $librillo;

	}


	public function buscarLibro( string $titulo) : string{
	
		foreach ($this->libros as $books ){
			if($books['Titulo'] == $titulo){
			    return  "Titulo : ". $books['Titulo']."</br>". 
				 		"autor : ". $books['Autor']."</br>". 
				 		"genero :". $books['Genero']."</br>"; 
				
			}
		
		}
		return "el libro {$titulo}, no esta disponible en la biblioteca";
	}
}

$libros = [
    ["Titulo" => "La tortuga y la liebre", "Autor" => "Miguel bose", "Genero" => "Drama"],
    ["Titulo" => "Transformes", "Autor" => "Linking One", "Genero" => "Accion"],
    ["Titulo" => "Ser libre", "Autor" => "Antonio machado", "Genero" => "Suspenso"],
    
];

$biblio = new Biblioteca("Biblioteca escolar", $libros);
echo $biblio->inventario();
echo $biblio->buscarLibro("la tortuga y la liebre");