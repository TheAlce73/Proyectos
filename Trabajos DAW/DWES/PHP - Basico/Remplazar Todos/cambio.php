<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$frase=$_POST["frase"];
		$cambiar=$_POST["cambiar"];
		$cambiado=$_POST["cambiado"];

		echo "<p>$frase</p>";

		$frase=str_replace($cambiar, $cambiado, $frase);

		echo "<p>$frase</p>";
	?>

</body>
</html>