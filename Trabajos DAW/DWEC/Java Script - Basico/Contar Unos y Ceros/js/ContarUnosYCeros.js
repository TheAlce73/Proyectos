var unosyceros = [
			[[1,0,1],[1,1,1],[0,0,0]],
			[[1,0,1],[1,1,1],[1,0,0]],
			[[1,0,0],[1,0,1],[0,0,1]]
		];
		console.log("cargando");

	
		
		function load(){
		var cont=0;
		var contT=0;

		for (var i=0; i < 3 ; i++) { 
			for ( var x=0; x < 3 ; x++) { 
				for (var z=0; z < 3; z++) { 
					var num=unosyceros[i][x][z];
					if (num==1) {
						cont++;
					}
					contT++;

				}
			}
		
		}
		var res=(contT-cont);
		document.getElementById("demo").innerHTML="Hay  "+cont+" unos y "+res+" ceros";

	}
	window.onload=load;
		