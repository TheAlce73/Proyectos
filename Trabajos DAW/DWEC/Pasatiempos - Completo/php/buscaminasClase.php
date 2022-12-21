<?php
	/**
	 * clase sudoku que implementa los datos del sudoku
	 */
	class buscaminas {

		public $tablero=[[0,0,0],
			  		 	 [2,2,1],
			 			 [-1,-1,1]];


		function pintaBuscaminas(){
			echo "\n<table>\n";
			for ($pro=0; $pro < 3; $pro++) { 
				echo "<tr>\n";

				$clase = "class=\"celda\"";

				for ($dato=0; $dato < 3; $dato++) { 

					$atrib = $clase." id=\"$pro$dato\"";

					$clickencelda = "onclick='clickEnCeldaBM($pro,$dato)'";

					echo "\t<td $atrib $clickencelda></td>\n";	
				}
				echo "</tr>\n";
			}			
			echo "</table>";			
		}
		function quehay($fila,$columna){
			return $this->tablero[$fila][$columna];
		}
	}