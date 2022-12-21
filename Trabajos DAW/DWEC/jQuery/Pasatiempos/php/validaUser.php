<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pasatiempos</title>
	<script type="text/javascript" src="../js/registraUsuarios.js"></script>
	<script type="text/javascript" src="../js/ventanaModal.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/ventanaModal.css" />
</head>
<body>
<?php

	require 'validausuarios.php';
	require 'listausuarios.php';

	$nombre=$_POST["user"];
	$passwd=$_POST["pass"];


	if(validaAdmin($nombre,$passwd)){
		$_SESSION["conecadmin"]="si";
		echo "<h3>Bienvenido $nombre</h3>";
?>
		usuario: <input type="text" name="user" id="user">
		<br />
		contraseña: <input type="text" name="pass" id="pass">
		<br />
		<button onclick="registraUser()" >Crear usuario</button>
		<div id="aviso"></div>
		<hr />
		<h3> Usuarios </h3>
		<hr />
<?php
		
		listausers();

 		include 'cierraSesion.html';
	}else{
		if(validaUsuario($nombre,$passwd)){

			include 'registraBD.php';
			$bd = new registraBD();
			$bd->registraAccion("Entra en la plataforma");

			$_SESSION["conectado"]="si";
			$_SESSION["usuario"]=$_POST["user"];

			echo "<h3>Bienvenido $nombre</h3>";
?>
			<h5>Selecciona el juego:</h5>
			<table>
				<tr>
					<td>
						<form action="juegosudoku.php" method="post">
							<input type="image" src="../imagenes/sudokuIcon.png" alt="sudoku" width="100" height="100" \>
						</form>
					</td>
					<td>
						<form action="juegotresenraya.php" method="post">
							<input type="image" src="../imagenes/tresenrayaIcon.png" alt="tres en raya" width="100" height="100" \>
						</form>
					</td>
					<td>
						<form action="juegoahorcado.php" method="post">
							<input type="image" src="../imagenes/ahorcado.jpg" alt="ahorcado" width="100" height="100" \>
						</form>
					</td>
				<tr>
				</tr>	
					<td>
						<form action="hundirlaflota.php" method="post">
							<input type="image" src="../imagenes/hundirlaflota.jpg" alt="huidr la flota" width="100" height="100" \>
						</form>
					</td>
					<td>
						<form action="buscaminas.php" method="post">
							<input type="image" src="../imagenes/buscaminas.png" alt="buscaminas" width="100" height="100" \>
						</form>	
					</td>
					<td>
						<form action="bingo.php" method="post">
							<input type="image" src="../imagenes/bingo.jpg" alt="buscaminas" width="100" height="100" \>
						</form>	
					</td>
				</tr>
			</table>
			<form action="historial.php" method="get">
				<input type="submit" value="sacar historial">
			</form>
			<button id="boton">Listado de acciones del usuario</button>
			<div id="lamascara" class="mascara">
			    <div class="contenido">
			    	<span class="cerrar">&times;</span>
			    	<p id="listado"></p>
			    </div>
			</div>
<?php

	 		include 'cierraSesion.html';
		}else{
			echo "No has entrado<br />";
			session_unset();
			session_destroy();
		}
	}
?>
</body>
</html>