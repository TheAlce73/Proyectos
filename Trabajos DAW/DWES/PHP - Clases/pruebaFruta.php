<!DOCTYPE html>
<html>
<head>
	<title>Frutas</title>
</head>
<body>
<?php
    require 'fruta.php';

	$frutas = array();

	$frutas["manzana"]=new fruta();
	$frutas["manzana"]->setNombre("Manzana");

	$frutas["pera"]=new fruta("Pera");
	$frutas["pera"]->setPrecio(4.0);

	$frutas["naranja"]=new fruta("Naranja",2.5);

	foreach ($frutas as $nomFruta => $objFruta) {
		echo "En $nomFruta tengo ".$objFruta->getNombre()." a ".$objFruta->getPrecio()."<br />";	
	}

?>
</body>
</html>