<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		session_unset();
		session_destroy();
	 ?>
	 <p>Sesión Destruida</p><br>
	 <form action="fiboSesion.php">
	 	<input type="submit" name="recargar" value="volver">
	 </form>
</body>
</html>