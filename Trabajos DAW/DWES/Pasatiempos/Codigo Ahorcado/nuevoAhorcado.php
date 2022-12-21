<?php
	session_start();

	require 'ahorcadoClase.php';

	$hrcd = new ahrcd();
	echo $hrcd->renuevaAhrcd();
?>