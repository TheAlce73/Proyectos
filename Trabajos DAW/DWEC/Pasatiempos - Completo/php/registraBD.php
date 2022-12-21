<?php

class registraBD {

/*
	public function cierraSession()
	{
		try {
		    $conn = new PDO($_SESSION["basededatos"], $_SESSION["userAdminBD"], $_SESSION["passAdminBD"]);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    error_log("Connected successfully");

		    $insercion="INSERT INTO HISTORIA (id_usuario, accion, tiempo) VALUES ('".$_SESSION["id"]."', 'Cierra la session', '".date_format(date_create(),"Y/m/d H:i:s")."')";
						
						$conn->query($insercion);

		}catch(PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage());
		}

		$conn = null;
	}
*/
	public function registraAccion($accion)
	{
		try {
			//primer paso: conexion a la BD
		    $conn = new PDO($_SESSION["basededatos"], $_SESSION["userAdminBD"], $_SESSION["passAdminBD"]);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    error_log("Connected successfully");

		    //segundo paso: inserción en la BD
		    $insercion="INSERT INTO HISTORIA (id_usuario, accion, tiempo) VALUES ('".$_SESSION["id"]."', '$accion', '".date_format(date_create(),"Y/m/d H:i:s")."')";
						
			$conn->query($insercion);

		}catch(PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage());
		}
		//tercer paso: cerrar la conexión
		$conn = null;
	}

	public function listaHistorial()
	{
		try {
		    $conn = new PDO($_SESSION["basededatos"], $_SESSION["userAdminBD"], $_SESSION["passAdminBD"]);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    error_log("Connected successfully");

		    $select="SELECT accion, tiempo FROM historia WHERE id_usuario='".$_SESSION["id"]."'";
			
			$result=$conn->query($select);

			$salida=Array();
			if ($result->rowCount() > 0) {
					while($listado = $result->fetch(PDO::FETCH_ASSOC)){
						$salida[]=[$listado["accion"],$listado["tiempo"]];
					}
			}
			return $salida;
		}catch(PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage());
		}

		$conn = null;
	}
}	
?>