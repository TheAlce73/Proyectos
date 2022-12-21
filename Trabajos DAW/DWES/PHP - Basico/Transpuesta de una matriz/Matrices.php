<!DOCTYPE html>
<html>
<head>
	<title>Java script</title>
</head>
<body>

	<?php

		$matriz=array(
			array(1,2,3),
			array(4,5,6),
			array(7,8,9)
		);
		echo "<table border=3 bordercolor=blue>";
		echo "<tr> <th colspan=\"5\">Primera Matriz</th></tr>";
		for ($i=0; $i <3 ; $i++) { 
			echo "<tr>";
			for ($x=0; $x < 3; $x++) { 
					$m=$matriz[$i][$x];
					echo" <td> $m </td>";
			}
			echo"<tr>";
		}
		echo"</table>";
		echo"</br>";

		$matriz2=array(
			array(0,0,0),
			array(0,0,0),
			array(0,0,0)
		);

		for ($i=0; $i <3 ; $i++) { 
			for ($x=0; $x < 3; $x++) { 
				$matriz2[$i][$x]=$matriz[$x][$i];
				
				
			}
		}
		echo "<table border=3 bordercolor=blue>";
		echo "<tr> <th colspan=\"5\">Segunda Matriz</th></tr>";
		for ($i=0; $i <3 ; $i++) { 
			echo "<tr>";
			for ($x=0; $x < 3; $x++) { 
					$m=$matriz2[$i][$x];
					echo" <td> $m </td>";
			}
			echo"<tr>";
		}
		echo"</table>";
	
	?>
</body>
</html>