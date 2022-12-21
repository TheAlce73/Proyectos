<?php
	session_start();

	include 'registraBD.php';
	$bd = new registraBD();
	$bd->registraAccion("cierra la sesion");

	session_unset();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pasatiempos</title>
</head>
<body>
	<h3>Cerraste la sesion</h3>
	<button onclick="location.href='http://pasatiempos.turienzo.es'">Login</button>
</body>
</html>