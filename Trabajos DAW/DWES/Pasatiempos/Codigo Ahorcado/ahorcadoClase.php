<?php
	/**
	 * clase sudoku que implementa los datos del sudoku
	 */
	class ahrcd 
	{
		private $solucion = "abc";
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

			return $salida;
		}


		function compruebaAhrcd($letra) {
			$tam = strlen($this->solucion);
			$salida="";
			for ($i=0; $i < $tam ; $i++) { 
				if($letra==$this->solucion[$i]){
					$salida.=";p".$i;
					$_SESSION["numLetras"]--;
				}
			}
			if($salida=="") {
				$_SESSION["fallos"]++;
				if($_SESSION["fallos"]==$this->fallos){
					$salida="0";
				}else{
					$salida="1;".$_SESSION["fallos"];
				}
			}else{
				if($_SESSION["numLetras"]==0){
					$salida="2".$salida;
				}else{
					$salida="3".$salida;
				}
			}
			echo $salida;
		}
	}
?>