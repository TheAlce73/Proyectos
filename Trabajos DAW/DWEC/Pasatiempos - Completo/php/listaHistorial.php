<?php
	session_start();

	include 'registraBD.php';
	$bd = new registraBD();
	
	echo json_encode($bd->listaHistorial());
?>