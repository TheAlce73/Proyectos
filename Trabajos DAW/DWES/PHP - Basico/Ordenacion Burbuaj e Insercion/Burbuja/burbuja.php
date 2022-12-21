<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>

		<?php

			$num=$_GET["numeros"];
			$array=explode(",", $num);
			$tam=count($array);

			$i=1;
			$ordenado=false;

			while($i<$tam && $ordenado==false)
			{

				$i++;
				$ordenado=true;

				for ($j=0;$j<$tam-1;$j++)
				{
					
				
					if ($array[$j]>$array[$j+1])
					{
						$ordenado=false;
						$aux=$array[$j];
						$array[$j]=$array[$j+1];
						$array[$j+1]=$aux;

					}
				}
			}



			var_dump($array);


		?>	






	</body>
</html>