<!DOCTYPE html>
<html>
<head>
	<title>cadena ordenada</title>
</head>
<body>
<?php

if (isset($_POST["cadena"])){
	$cadena=$_POST["cadena"];

	$tam=strlen($cadena);

	$salida=array();

	for($i=0;$i<$tam;$i++){
		if(($cadena[$i]>="a")&&($cadena[$i]<="z")){
			if (isset($salida[$cadena[$i]])){
				$salida[$cadena[$i]]++;
			}else{
				$salida[$cadena[$i]]=1;
			}
		}
	}

	ksort($salida);
	foreach($salida as $letra => $valor){
		echo "De $letra hay $valor <br />";
	}
	echo "<br />-------------------------------------<br />";
	arsort($salida);
	foreach($salida as $letra => $valor){
		echo "De $letra hay $valor <br />";
	}

}
?>
</body>
</html>