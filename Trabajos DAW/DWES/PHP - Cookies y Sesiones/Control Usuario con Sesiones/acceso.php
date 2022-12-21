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

	if (isset($_POST["usu"]) 
 		&&isset($_POST["pass"])
 		&&($_POST["usu"]=="pepe")
 		&&($_POST["pass"]=="pepito")){

		$_SESSION["CONECTADO"]="si";
		$_SESSION["usu"]=$_POST["usu"];
		echo "<a href='dentro.php'>Validado, puedes entrar dentro</a>";
	}else{
		echo "<p>Error en el acceso</p>";
	}
?>
</body>
</html>