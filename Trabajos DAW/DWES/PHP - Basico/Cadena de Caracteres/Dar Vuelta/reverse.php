<!DOCTYPE html>
<html>
<head>
	<title>dar la vuelta a una cadena</title>
</head>
<body>
<?php
	if (isset($_GET["cadena"])){
	$cadena=$_GET["cadena"];

	$salida="";

	$tam=strlen($cadena);

	if($tam==0 || $tam==1){
		echo "cadena revertida:-".$cadena."-";
	}else{

		for($i=$tam-1;$i>=0;$i--){
			$salida.=$cadena[$i];
		}

		echo "cadena revertida:-".$salida."-";
	}
}
?>
</body>
</html>