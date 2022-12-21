<?php
	session_start();

	require 'sudokuClase.php';

	if(!isset($_SESSION["conectado"])){
		echo "<p>No estas conectado</p>";
	}else{
		if(!isset($_POST["compSdk"]){
			$sdkAcomprobar = $_POST["compSdk"];

			$sdk = new sudoku();
			echo $sdk->compruebaSudoku($sdkAcomprobar);
		}else{
			echo "error en datos";
		}
	}
?>