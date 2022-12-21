<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscaminas</title>
	<link rel="stylesheet" type="text/css" href="../css/tabla.css"></link>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/buscaminas.js"></script>
</head>
<body>

<?php

	require 'buscaminasClase.php';

	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		include 'registraBD.php';
		$bd = new registraBD();
		$bd->registraAccion("Entra a jugar al buscaminas");

		include 'cierraSesion.html';

		echo "<p> usuario: ".$_SESSION["usuario"]."</p>";

		$bm = new buscaminas();
		$bm->pintaBuscaminas();
	}
?>

</body>
</html>