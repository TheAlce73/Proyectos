<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>control</title>
</head>
<body>
<?php

	if (isset($_SESSION["CONECTADO"])){
		echo "<p>Efectivamente estas dentro con el usuario ".$_SESSION["usu"]."</p>";
		echo "<form action=\"salir.php\">
				<input type=\"submit\" value=\"finaliza la sesión\">
			  </form>";
	}else{
		echo "<p>Estas accediendo sin login</p>";
	}
?>
</body>
</html>