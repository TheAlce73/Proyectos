<?php
	session_start();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ahorcado</title>
	<script type="text/javascript" src="../js/compruebaAhrcd.js"></script>
</head>
<body>
<?php

	require 'ahorcadoClase.php';

	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		include 'cierraSesion.html';

		echo "<p> usuario: ".$_SESSION["usuario"]."</p>";
		$_SESSION["fallos"]=0;
?>
		
		<hr />
		<p>
			<button type="button" onclick="comenzarDeNuevo()">Comenzar de nuevo</button>
		</p>
		<p>
			<input type="text" name="letra" id="letra" />
			<button type="button" onclick="compruebaAhorcado()">Comprueba letra</button>
		</p>

		<p id="salida"></p>
<?php
		$hrcd = new ahrcd();
		echo "<p id=\"relleno\">";
		$_SESSION["numLetras"]=$hrcd->pintaAhrcd();
		echo "</p>";
	}

?>
</body>
</html>