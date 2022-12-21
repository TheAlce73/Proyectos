<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		 $num=$_POST["numero"]*pi()/180;
		 $cal=$_POST["cal"];
		 function Calculo($numero,$num){
		 	
		 	if($numero==1){
		 		echo sin($num);
		 	}else{
		 		if ($numero==2) {
		 			echo cos($num);
		 		}else{
		 			echo tan($num);
		 		}
		 	}
		 }
		 require "calculo.html";
	?>
	<hr>
	Resultado: <?php  calculo($cal,$num) ?>
</body>
</html>