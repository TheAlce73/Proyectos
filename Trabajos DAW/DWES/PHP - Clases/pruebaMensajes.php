<!DOCTYPE html>
<html>
<head>
	<title>prueba de constantes</title>
</head>
<body>
<?php
	require 'mensajes.php';

	echo mensajes::HOLA."<br />";
	echo mensajes::fecha()."<br />";
	echo mensajes::$pi."<br />";
	mensajes::$pi=3.141592;
	echo mensajes::$pi."<br />";
	echo mensajes::ADIOS."<br />";

	$msj1 = new mensajes();
	$msj1->aumenta();
	echo mensajes::$pi."<br />";

	$msj2 = new mensajes();
	echo $msj2->dimePi()."<br />";

	$msj3 = new mensajes();
	echo $msj3->dimePi()."<br />";	
	$msj3->aumenta();

	echo $msj2->dimePi()."<br />";
?>
</body>
</html>