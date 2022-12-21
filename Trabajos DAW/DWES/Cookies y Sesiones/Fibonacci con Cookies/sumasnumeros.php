<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (!isset($_COOKIE["ele1"]) && !isset($_COOKIE["ele2"])) {
			setcookie("ele1",0);
			setcookie("ele2",1);
			
		}else{
			$primero=$_COOKIE["ele1"];
			
			$segundo=$_COOKIE["ele2"];
			
			
			if ($primero==0 && $segundo==1) {
				echo "$primero <br>";
				for ($x=0; $x < 8 ; $x++) { 
						$activo=$primero+$segundo;
						$primero=$segundo;
						$segundo=$activo;
						
						echo "$segundo <br>";
						
					}
			}else{
					for ($x=0; $x < 10 ; $x++) { 
						$activo=$primero+$segundo;
						$primero=$segundo;
						$segundo=$activo;
						
						echo "$segundo <br>";
						
					}
				}
			setcookie("ele1",$primero);
			setcookie("ele2",$segundo);
			echo "---------------------------- <br>";
			echo "El elemento uno es $primero <br>";
			echo "El elemento dos es $segundo <br>";

		}
		
	?>
</body>
</html>