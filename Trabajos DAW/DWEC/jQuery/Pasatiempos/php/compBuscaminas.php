<?php
	session_start();
	
	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		require 'buscaminasClase.php';

		$bm = new buscaminas();
		echo $bm->quehay($_GET["fila"],$_GET["columna"]);
	}
?>