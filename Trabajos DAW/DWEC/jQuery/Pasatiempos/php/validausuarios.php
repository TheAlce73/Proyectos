<?php

	function validaUsuario($n,$p){
		error_log("-".$n."-".$p."-");
		$entro=false;

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

			$result = $conn->query("SELECT pass,id FROM usuarios WHERE user='".$n."'");
		    		  
			if(!$result){
				error_log("el usuario $n no existe.");
			}else{

				if ($result->rowCount() == 1) {
					$passwd = $result->fetch(PDO::FETCH_ASSOC);

					if(password_verify($p, $passwd["pass"])){
						$entro=true;

						//id en session
						$_SESSION["id"]=$passwd["id"];
						$_SESSION["basededatos"]="mysql:host=localhost;dbname=pasatiempos";
						$_SESSION["userAdminBD"]=$conf["userBD"];
						$_SESSION["passAdminBD"]=$conf["passBD"];
					}else{
						error_log("no coincide la password".$p."-".$listaUsers[$n]);
					}
				}
			}
		    
		}
		catch(PDOException $e) {
		    error_log("Connection failed: " . $e->getMessage());
		}

//cerrar la conesión
		$conn = null;
		return $entro; 
/*
		$fileUsers="../datos/usuarios.dat";

		if(!file_exists($fileUsers)){
			error_log("No existe el fichero de datos de usuarios $fileUsers");
		}

		$fusers=fopen($fileUsers,"r");
		
		while(!feof($fusers)){
			 $usuario = explode(";",fgets($fusers));
			 $listaUsers[$usuario[0]]=substr($usuario[1], 0, (strlen($usuario[1])-1));
		}

		fclose($fusers);

		if(isset($listaUsers[$n])){
			if(password_verify($p, $listaUsers[$n])){
				$entro=true;
			}else{
				error_log("no coincide la password".$p."-".$listaUsers[$n]);
			}
		}else{
			error_log("no se encuentra el usuario");
		}

		return $entro; 
		*/
	}

	function validaAdmin($nom,$pass){
		$esAdmin=false;
		$fileConf="../datos/pasatiempos.conf";

		error_log($nom."-".$pass);

		if(!file_exists($fileConf)){
			error_log("Error fatal. No existe el fichero de configuracion $fileConf");
		}else{

			$datAdmin=array();

			$fconf=fopen($fileConf,"r") or die("Error en acceso al fichero");
			$datAdmin=explode(";",fgets($fconf));
			fclose($fconf);

			$datAdmin[1]=substr($datAdmin[1], 0, (strlen($datAdmin[1])-2));

			error_log($nom."-".$pass."-".$datAdmin[0]."-".$datAdmin[1]);

			if (($nom==$datAdmin[0])&&($pass==$datAdmin[1])){
				$esAdmin=true;
			}
		}

		return $esAdmin;
	}
?>