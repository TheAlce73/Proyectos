<?php
	/**
	 * clase sudoku que implementa los datos del sudoku
	 */
	class ahrcd 
	{
		private $solucion = "abracadabra";
		private $fallos = 7;

		function pintaAhrcd() {
			echo "\n<table><tr>\n";
			$tam = strlen($this->solucion);
			for ($i=0; $i < $tam ; $i++) { 
				echo "<td id=\"p$i\">_</td>";
			}

			echo "\n</tr></table>\n";

			return $tam;
		}

		function renuevaAhrcd() {
			$salida="\n<table><tr>\n";
			$tam = strlen($this->solucion);
			for ($i=0; $i < $tam ; $i++) { 
				$salida.="<td id=\"p$i\">_</td>";
			}

			$salida.="\n</tr></table>\n";

			$_SESSION["numLetras"]=$tam;
			$_SESSION["fallos"]=0;

			return $salida;
		}


		function compruebaAhrcd($letra) {
			$tam = strlen($this->solucion);
			$salida = array("-1");

			for ($i=0; $i < $tam ; $i++) { 
				if($letra==$this->solucion[$i]){
					$salida[]="p".$i;
					$_SESSION["numLetras"]--;
				}
			}

			
			if(count($salida)==1) {
				$_SESSION["fallos"]++;
				if($_SESSION["fallos"]==$this->fallos){
					$salida[0]="0";
				}else{
					$salida[0]="1";
					$salida[]=$_SESSION["fallos"];
				}
			}else{
				if($_SESSION["numLetras"]==0){
					$salida[0]="2";
				}else{
					$salida[0]="3";
				}
			}

			echo json_encode($salida);
		}
	}
?>