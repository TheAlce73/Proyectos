<!DOCTYPE html>
<html>
<head>
	<title>Euromillones PHP</title>
</head>
<body>
<?php

	//lectura de la apuesta a validar
	$num = $_GET["numeros"];
	$est = $_GET["estrellas"];

	//conversion de la cadena en array
	$numArr = explode(',',$num);
	$estArr = explode(',',$est);

	//combinación ganadora
	$premioNum = array(51,52,53,54,55);
    $premioEst = array(8,9);

    //contadores de aciertos
    $contNum=0;
    $contEst=0;

    //flag de validación
    $valido=true;


    //validación de datos de apuesta de numeros

    if (count($numArr)!=5){
    	echo "Error: no hay 5 numeros";
    	$valido=false;
    }else{
	    for($i=0;$i<5;$i++){
		    if (is_numeric($numArr[$i])){
				$numArr[$i]=(int)$numArr[$i];
				if ($numArr[$i]<1 or $numArr[$i]>55){
					echo "error: $numArr[$i] no esta entre 1 y 55";
					$valido=false;
				}
			}else{
				echo "error: $numArr[$i] no es un numero";
				$valido=false;
			}
		}
	}

	//validación de datos de apuesta de estrellas
    if (count($estArr)!=2){
    	echo "Error: no hay 2 estrellas";
    	$valido=false;
    }else{
	    for($i=0;$i<2;$i++){
		    if (is_numeric($estArr[$i])){
				$estArr[$i]=(int)$estArr[$i];
				if ($estArr[$i]<1 or $estArr[$i]>9){
					echo "error: la estrella $estArr[$i] no esta entre 1 y 9";
					$valido=false;
				}
			}else{
				echo "error: $estArr[$i] no es una estrella";
				$valido=false;
			}
		}
	}

	if($valido){
	    //bucles para validar si se han acertado los 5 numeros
	    for($ne=0;$ne<5;$ne++){
		    for($ni=0;$ni<5;$ni++){
	    		if((int)$numArr==$premioNum){
	    			$contNum++;
	    		}
	    	}    	
	    }

	    //bucles para validar si se han acertado los 2 numeros
	    for($ne=0;$ne<2;$ne++){
		    for($ni=0;$ni<2;$ni++){
	    		if((int)$estArr[$ne]==$premioEst[$ni]){
	    			$contEst++;
	    		}
	    	}    	
	    }
		
		if (($contNum == 5) and ($contEst == 2)){
			echo "<p>Tocote</p>";
		}else{
			echo "<p>No tocote, tienes $contNum numeros y $contEst estrellas.</p>";
		}
	}
?>
</body>
</html>