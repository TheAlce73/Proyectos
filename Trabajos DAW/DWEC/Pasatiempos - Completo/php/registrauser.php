<?php

//lectura de usuario y contraseña de BASE DE DATOS

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

//error_log($conf["userBD"]."-".$conf["passBD"]);

//Conexión a la base de datos
try {
    $conn = new PDO("mysql:host=localhost;dbname=pasatiempos", $conf["userBD"], $conf["passBD"]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected successfully");

	//Crear el insert
	$insertaUser = "INSERT INTO usuarios (user,pass) VALUES ('".$_POST["user"]."','".password_hash($_POST["pass"],PASSWORD_DEFAULT)."')";
	//ejecutar el insert
    $conn->exec($insertaUser);
}
catch(PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
}

//cerrar la conesión
$conn = null;


/*
	$fileUsers="../datos/usuarios.dat";
	$existe=true;

	if(!file_exists($fileUsers)){
		error_log("No existe el fichero de datos de usuarios $fileUsers");
		$existe=false;
	}

	$fusers=fopen($fileUsers,"a");
	if($existe){
		fwrite($fusers,"\n");	
	}
	fwrite($fusers,$_POST["user"].";".password_hash($_POST["pass"], PASSWORD_DEFAULT));
	fclose($fusers);
*/
?>