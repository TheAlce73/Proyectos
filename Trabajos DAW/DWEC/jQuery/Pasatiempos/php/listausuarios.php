<?php
function listausers()
{
		$fichC = "../datos/pasatiempos.conf";

		if(!file_exists($fichC)){
				error_log("No existe el fichero de datos de configuracion $fichConf");
		}

		$fichConf=fopen($fichC,"r");

		fgets($fichConf);

		$user=fgets($fichConf);
		$user=substr($user, 0, (strlen($user)-2));
		$userArr=explode("=", $user);
		//error_log($userArr[0]."-".$userArr[1]);
		$pass=fgets($fichConf);
		$pass=substr($pass, 0, (strlen($pass)-2));
		$passArr=explode("=", $pass);
		//error_log($passArr[0]."-".$passArr[1]);

		fclose($fichConf);

		$conf[$userArr[0]]=$userArr[1];
		$conf[$passArr[0]]=$passArr[1];		

		//Conexión a la base de datos
		try {
		    $conn = new PDO("mysql:host=localhost;dbname=pasatiempos", $conf["userBD"], $conf["passBD"]);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    error_log("Connected successfully");

			$result = $conn->query("SELECT user FROM usuarios");
		    		  
			if(!$result){
				error_log("Error en la select.");
			}else{
				if ($result->columnCount() > 1) {
					$u = $result->fetch(PDO::FETCH_ASSOC);
					echo $u["user"]."<br />";
				}
			}
		    
		}
		catch(PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage());
		}

		//cerrar la conesión

	/*
	$fileUsers="../datos/usuarios.dat";

	if(!file_exists($fileUsers)){
		error_log("No existe el fichero de datos de usuarios $fileUsers");
	}else{

		$fusers=fopen($fileUsers,"r") or die("Error en acceso al fichero");

		while(!feof($fusers)){
			echo explode(";",fgets($fusers))[0]."<br />";
		}

		fclose($fusers);
	}
	*/
}