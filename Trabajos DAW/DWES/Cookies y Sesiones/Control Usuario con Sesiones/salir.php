<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>fibonacci con sesiones</title>
</head>
<body>
<?php
	session_unset();
	session_destroy();
?>
<p>Sesion finalizada</p>

<?php
	include 'formlogin1.php';
?>

</body>
</html>