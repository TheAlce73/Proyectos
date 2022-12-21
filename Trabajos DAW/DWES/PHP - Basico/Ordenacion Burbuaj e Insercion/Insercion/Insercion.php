<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$numeros = $_GET["numero"];
$array=explode(',', $numeros);
$tam=count($array);
for ($j=0; $j < $tam ; $j++) { 
	$clave=$array[$j];
	$i=$j-1;
	while ($i>=0 && $array[$i]>$clave){
		$array[$i+1]=$array[$i];
		$i=$i-1;
	}
	$array[$i+1]=$clave;
}
$x=0;
while($x<$tam){
	if($x==$tam-1){
		echo $array[$x];
	}
	else{
		echo "$array[$x] , ";
	}
	$x++;
}


?>
</body>
</html>

