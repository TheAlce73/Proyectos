<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Historial de acciones</title>
</head>
<body>
<?php
	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{

		try {
			//primer paso: conexión a BD
		    $conn = new PDO($_SESSION["basededatos"], $_SESSION["userAdminBD"], $_SESSION["passAdminBD"]);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully";

		    //Segundo paso: ejecutar la select
		    $selectBD="SELECT accion,tiempo FROM HISTORIA WHERE id_usuario='".$_SESSION["id"]."'";

			echo "<table>";
		    foreach ($conn->query($selectBD) as $fila) {
		        echo "<tr><td>".$fila['accion']."</td><td>".$fila['tiempo']."</td></tr>";
		    }
		    echo "</table>";

/*
		    $resultado=$conn->query($selectBD);

		    //tercer paso: escribir los resultados
		    
		    echo "<table>";
		    while ($fila = $resultado->fetch()) {
   				 echo "<tr><td>".$fila['accion']."</td><td>".$fila['tiempo']."</td></tr>";
			}
			echo "</table>";
*/
		}catch(PDOException $e){
		    echo "Connection failed: " . $e->getMessage();
		}
		//cuarto paso: cerrar la conexion
		$conn=null;
	}
?>
</body>
</html>