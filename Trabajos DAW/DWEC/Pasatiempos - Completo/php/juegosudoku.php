<?php
	session_start();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sudoku</title>
	<link rel="stylesheet" type="text/css" href="../css/tabla.css"></link>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/sudokuTabla.js"></script>
	<script type="text/javascript" src="../js/compruebaSdk.js"></script>
</head>
<body>
<?php

	require 'sudokuClase.php';

	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		include 'registraBD.php';
		$bd = new registraBD();
		$bd->registraAccion("Entra a jugar al sudoku");

		include 'cierraSesion.html';

		echo "<p> usuario: ".$_SESSION["usuario"]."</p>";
?>
		<p>
		<button type="button" onclick="compruebaSdk()">Comprueba sudoku</button>
		</p>
<?php
		$sdk = new sudoku();
		$sdk->pintaSudoku();
	}
?>
<div id="aviso"></div>
</body>
</html>