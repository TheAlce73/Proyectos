<?php
class mensajes{
	const HOLA = "hola";
	const ADIOS = "adios";

	public static $pi=3.1415;

	public static function fecha(){
		return date("d/m/Y h:i:sa");
	}

	function aumenta(){
		mensajes::$pi=mensajes::$pi*2;
	}

	function dimePi(){
		return mensajes::$pi;
	}
}
?>