<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (!isset($_SESSION["num1"])&&!isset($_SESSION["num2"])) {
			$_SESSION["num1"]=0;
			$_SESSION["num2"]=1;

			$primero=$_SESSION["num1"];
			$segundo=$_SESSION["num2"];

			echo "$primero <br>";
			echo "$segundo <br>";


			for ($x=0; $x < 8 ; $x++) { 
						$activo=$primero+$segundo;
						$primero=$segundo;
						$segundo=$activo;

						echo "$segundo <br>";
					}
			

			$_SESSION["num1"]=$primero;
			$_SESSION["num2"]=$segundo;

		}else{

			$primero=$_SESSION["num1"];
			$segundo=$_SESSION["num2"];

			for ($x=0; $x < 10 ; $x++) { 
						$activo=$primero+$segundo;
						$primero=$segundo;
						$segundo=$activo;
						
						echo "$segundo <br>";
						
					}
			$_SESSION["num1"]=$primero;
			$_SESSION["num2"]=$segundo;

		}
	 ?>
	 <br>
	 <br>
	 <form action="fiboDestroy.php">
	 	<input type="submit" name="eliminar" value="eliminar">
	 </form>
	 <br><br>
	 <form action="fiboSesion.php">
	 	<input type="submit" name="recargar" value="recargar">
	 </form>
</body>
</html>