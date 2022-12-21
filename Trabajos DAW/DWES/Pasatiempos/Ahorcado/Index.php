<!DOCTYPE html>
<html>
<head>
	<title>Ahorcado</title>
	<link rel="stylesheet" type="text/css" href="css/css1.css">
	<script type="text/javascript" src="js/valida.js"></script>
</head>
<body>
	<div id="div1">
		<h1>AHORCADO</h1>
		<br>
		<form onsubmit="return validaUser()" action="php/ahorcado.php" method="post">
			Nombre: <input type="text" name="nombre" id="nombre">
			Contraseña: <input type="text" name="contraseña" id="contraseña">
			<br><br>
			<input type="submit" name="entrar" value="entrar">
		</form>
		<br>
		<img src="imagenes/foto.jpg">
	</div>

</body>
</html>