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
		include 'registraBD.php';
		$bd = new registraBD();
		$bd->registraAccion("Entra a jugar al ahorcado");

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
		<br />
		<canvas id="ahorcado" width="300" height="300" style="border:1px solid #000000;">
		</canvas>
		<br />
<?php
		$hrcd = new ahrcd();
		echo "<div id=\"relleno\">";
		$_SESSION["numLetras"]=$hrcd->pintaAhrcd();
		echo "</div>";
	}

?>
</body>
</html>