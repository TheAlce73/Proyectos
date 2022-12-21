<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" href="js/valida.js"></script>
</head>
<body>
	<?php 
		function validaUser($n,$p){
			if ($n=="alvaro"&&$p=="alce") {
				$_SESSION["conectado"]=true;
				
				return true;

			}else{
				$_SESSION["conectado"]=false;
				return false;
			}
		}

	

		if (isset($_POST["nombre"])&&isset($_POST["contraseña"])) {
				$nombre=$_POST["nombre"];
				$pass=$_POST["contraseña"];
				if (validaUser($nombre,$pass)) {
				echo "Ahorcado";
				}
				else{
				?>
				<h1>Porfavor Inicie Sesión</h1>
				<button ></button>
				<?php  
			}
			
		}else{
			?>
				<h1>Porfavor Inicie Sesión</h1>
				<form action="../Index.php">
					<input type="submit" value="Iniciar Sesion">
				</form>
				<?php  
	
		}
	 ?>
</body>
</html>