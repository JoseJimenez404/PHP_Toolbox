<?php

class Libro
{
	protected string $titulo;
	protected string $autor;
	protected int $anioPublicacion;

	public function __construct($titulo, $autor, $anioPublicacion)
	{
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->anioPublicacion = $anioPublicacion;
	}

	public function obtenerDetalles(): string
	{
		return
			   "Titulo:{$this->titulo} <br>
			   Autor : {$this->autor}  <br>
			   Año de Publicacion: {$this->anioPublicacion} <br>";
	}

	public function obtenerTitulo(){
		return $this->titulo;
	}
}


class LibroFiccion extends Libro
{
	protected string $genero;

	public function __construct(string $titulo, string $autor, int $anioPublicacion, string $genero)
	{
		parent::__construct($titulo, $autor, $anioPublicacion);
		$this->genero = $genero;
	}

	public function obtenerDetalles(): string
	{
		return
			parent::obtenerDetalles() .
			"Tema: {$this->genero} <br>";
	}
}


class LibroNoFiccion extends Libro
{
	protected string $tema;

	public function __construct(string $titulo, string $autor, int $anioPublicacion, string $tema)
	{
		parent::__construct($titulo, $autor, $anioPublicacion);
		$this->tema = $tema;
	}

	public function obtenerDetalles(): string
	{
		return
			parent::obtenerDetalles() .
			"Tema: {$this->tema} <br>";
	}
}


class Biblioteca{
	protected array $libros;

	public function __construct()
	{
		$this->libros = [];
	}

	public function agregarLibro(Libro $libro){
		$this->libros [] = $libro;
	}

	public function listarLibros() :string {
		
		$Books =	"Libros : <br>";

		foreach($this->libros as $books){
			$Books .= "-".$books->obtenerTitulo()."<br>";
		}	
		return $Books;
	}

	public function listarDetallesLibros() : array{
		$Detalles = [];
		foreach($this->libros as $books){
			$Detalles [] = $books->obtenerDetalles();
			
		}
		return $Detalles;

	}		
}

$librito = new LibroFiccion("Iron man","Toni stark",1959,"Ficción");
// echo $librito->obtenerDetalles();

$librote = new LibroNoFiccion("Sound of freedom","Cavalier",2023,"Tema privado");
// echo $librote->obtenerDetalles();

$biblioteca = new Biblioteca();
$biblioteca->agregarLibro($librito);
$biblioteca->agregarLibro($librote);
echo $biblioteca->listarLibros();
print_r($biblioteca->listarDetallesLibros());