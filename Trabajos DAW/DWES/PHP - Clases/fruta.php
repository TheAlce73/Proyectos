<?php
class fruta {
	//atributo
  	private $nombre;
  	private $precio;
  	
  	function __construct($nombre="",$precio=0){
  		$this->nombre=$nombre;
  		$this->precio=$precio;
  	}

  	function __destruct(){
  		echo "se finaliza el php llamando al destructor de ".$this->nombre."<br />";
  	}

  	//metodos
  	function getNombre(){
  		return $this->nombre;
  	}
  	//metodos
  	function setNombre($nombre){
  		$this->nombre=$nombre;	
  	}
  	function getPrecio(){
  		return $this->precio;
  	}
  	//metodos
  	function setPrecio($precio){
  		$this->precio=$precio;	
  	}

}
?>
