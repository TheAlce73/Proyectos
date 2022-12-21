<!DOCTYPE html>
<html>
<head>
	<title>Java script</title>
</head>
<body>
	<?php
		$unosyceros = array(
			array(
				array(1,0,1),
				array(1,1,1),
				array(0,0,0)),
			array(
				array(1,0,1),
				array(1,1,1),
				array(1,0,0)),
			array(
				array(1,0,0),
				array(1,0,1),
				array(0,0,1))
		);

		$cont=0;
		$contT=0;

		for ($i=0; $i < 3 ; $i++) { 
			for ($x=0; $x < 3 ; $x++) { 
				for ($z=0; $z < 3; $z++) { 
					$num=$unosyceros[$i][$x][$z];
					if ($num==1) {
						$cont++;
					}
					$contT++;

				}
			}
		
		}
		echo "En total hay $cont unos";
		
		$res=($contT-$cont);
		echo "En total hay $res  ";
	?>
</body>
</html>