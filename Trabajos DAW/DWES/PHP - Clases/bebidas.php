	<!DOCTYPE html>
<html>
<head>
	<title>capacidad de una botella</title>
</head>
<body>
<?php
	require 'botella.php';

	$zumo = new botella("Zumo");
	$agua = new botella("Agua");
	$aceite = new botella("Aceite");

	echo "Capacidad de botella: ".botella::$capacidad."cl <br />";
	echo "--------------------------------------------<br />";

	echo $zumo->contenido." en ".$zumo->tamBot()." cl<br />";
	echo "--------------------------------------------<br />";

	$aceite->litro();
	echo $zumo->contenido." en ".$zumo->tamBot()." cl<br />";	
	echo "--------------------------------------------<br />";

	$agua->tercio();
	echo $zumo->contenido." en ".$zumo->tamBot()." cl<br />";
	echo $aceite->contenido." en ".$aceite->tamBot()." cl<br />";	
	echo "--------------------------------------------<br />";

	$aceite->contenido="aceite refinado";
	echo $zumo->contenido." en ".$zumo->tamBot()." cl<br />";
	echo $aceite->contenido." en ".$aceite->tamBot()." cl<br />";	

	?>
</body>