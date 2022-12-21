<!DOCTYPE html>
<html>
<head>
	<title>cadena ordenada</title>
</head>
<body>
<?php

if (isset($_GET["cadena"])){
	$cadena=$_GET["cadena"];

	$tam=strlen($cadena);

	if($tam==0 || $tam==1){
		echo "cadena ordenada";
	}else{
		$contador=0;
		$ordenada=true;

		do{
			if($contador==($tam-1)) break;
			if($cadena[$contador]>$cadena[$contador+1]) $ordenada=false;
			$contador++;
		}while($ordenada);

		if($ordenada){
			echo "cadena ordenada"; 
		}else{
			echo "cadena desordenada";
		}
	}
}



?>
</body>
</html>