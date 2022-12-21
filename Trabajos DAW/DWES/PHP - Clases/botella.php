<?php
class botella{
	public static $capacidad=75;
	public $contenido;

	function __construct($bebida){
		$this->contenido=$bebida;
	}

	function tercio(){
		botella::$capacidad=33;		
	}
	function litro(){
		botella::$capacidad=100;		
	}
	function tamBot(){
		return botella::$capacidad;		
	}
}