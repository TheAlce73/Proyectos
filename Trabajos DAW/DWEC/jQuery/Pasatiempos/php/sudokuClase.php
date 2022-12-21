<?php
	/**
	 * clase sudoku que implementa los datos del sudoku
	 */
	class sudoku 
	{
		private $solucion = array();
		private $problema = array();

		function __construct()
		{
			$sdk = fopen("../datos/sudoku.dat", "r") or die("Imposible abrir el fichero");
			
			for ($sol=0; $sol < 9; $sol++) { 
				$this->solucion[] = explode(",",fgets($sdk));
				$this->solucion[$sol][8]=substr($this->solucion[$sol][8],0,1);
			}

			for ($pro=0; $pro < 9; $pro++) { 
				$this->problema[] = explode(",",fgets($sdk));	
				$this->problema[$pro][8]=substr($this->problema[$pro][8],0,1);
			}


			fclose($sdk);
		}

		function pintaSudoku(){
			echo "\n<table>\n";
			for ($pro=0; $pro < 9; $pro++) { 
				echo "<tr>\n";

				$clase = "class=\"celda\"";

				for ($dato=0; $dato < 9; $dato++) { 

					$atrib = $clase." id=\"$pro$dato\"";

					$clickencelda = "onclick='clickEnCelda(\"$pro$dato\")'";

					$contenido="";
					if($this->problema[$pro][$dato]!=0){
						$contenido=$this->problema[$pro][$dato];
					}

					echo "\t<td $atrib $clickencelda>".$contenido."</td>\n";	
				}
				echo "</tr>\n";
			}			
			echo "</table>";
		}

		function compruebaSudoku($sdkAcomp){
			$correcto = 1;
			$mal="";

			$sdkUsuario = explode(";",$sdkAcomp);

			for ($dato=0; $dato < 9; $dato++) {
				$sdkUsuario[$dato]=explode(",",$sdkUsuario[$dato]);
			}

			//bucle para comprobar si el sudoku del usuario es igual al sudoku correcto
			// sudoku correcto en $this->solucion
			// sudoku del usuario en $sdkSolucion
			//se comprueba elemento a elemento siendo una matriz de 9x9
			// la comprobación se hace con dos for anidados
			for ($fila=0; $fila < 9; $fila++) { 
				for ($colum=0; $colum < 9; $colum++) { 
					if($this->solucion[$fila][$colum]!=$sdkUsuario[$fila][$colum]){
						$correcto=0;
						$mal.=";".$fila.$colum;
					}
				}
			}


			return $correcto.$mal;
		}
	}
?>