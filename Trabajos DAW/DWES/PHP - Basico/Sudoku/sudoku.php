<!DOCTYPE html>
<html>
<head>
	<title>sudoku</title>
	<link rel="stylesheet" type="text/css" href="sudoku.css">
</head>
<body>
<?php

$solucion=array(
array(9,4,8,1,3,7,6,5,2),
array(2,7,1,6,9,5,8,4,3),
array(3,5,6,4,8,2,9,1,7),
array(7,1,2,5,6,9,4,3,8),
array(5,6,4,3,7,8,1,2,9),
array(8,9,3,2,4,1,7,6,5),
array(6,2,7,8,5,4,3,9,1),
array(1,3,9,7,2,6,5,8,4),
array(4,8,5,9,1,3,2,7,6));

$problema=array(
array(9,4,8,1,3,7,6,5,2),
array(2,7,1,6,9,5,8,4,3),
array(3,5,6,4,8,2,9,1,7),
array(7,1,2,5,6,9,4,3,8),
array(5,6,4,3,0,0,1,2,9),
array(8,9,3,2,4,1,7,6,5),
array(6,2,7,8,5,4,3,9,1),
array(1,3,9,7,2,6,5,8,4),
array(4,8,5,9,1,3,2,7,6));

$tam=9;
echo "<table>";

for($i=0;$i<$tam;$i++){
	echo "<tr>";
	for($j=0;$j<$tam;$j++){
		$class="class=\"";

		if (!$problema[$i][$j]){
			$class.=" vacio";
		}

		if ($i==2 || $i==5){
			$class.=" lineaGH";
		}

		if ($j==2 || $j==5){
			$class.=" lineaGV";
		}

		$class.="\"";

		if ($problema[$i][$j]){
			echo "<td $class>".$problema[$i][$j]."</td>";
		}else{
			echo "<td $class></td>";
		}
	}
	echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>