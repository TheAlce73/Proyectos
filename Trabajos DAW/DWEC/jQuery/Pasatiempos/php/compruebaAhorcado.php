<?php
	session_start();

	require 'ahorcadoClase.php';

	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		if(isset($_POST["letra"])){
			$ahrcdAcomprobar = $_POST["letra"];

			$hrcd = new ahrcd();
			echo $hrcd->compruebaAhrcd($ahrcdAcomprobar);
		}else{
			echo "-1";
		}
	}
?>