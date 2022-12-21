function compruebaSdk() {

	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {

				var indice = '012345678';
				var fil,col;

				for (fil of indice) {
					for (col of indice) {
					  document.getElementById(fil+col).style.background="white";
					}
				}     			 

				var respuestaComp = this.responseText.split(";");

				if(respuestaComp[0]=="1"){
					document.getElementById("aviso").innerHTML="<h1>ACERTASTE</h1>";
				}else{

					document.getElementById("aviso").innerHTML="<h1>FALLASTE EN "+(respuestaComp.length-1)+" POSICIONES";

					for (var i = 1; i < respuestaComp.length; i++) {
						document.getElementById(respuestaComp[i]).style.background="red";
			    	}
			    }
		}
  	};

	var indice = '012345678';
	var fil,col;
	var salida="compSdk=";

	for (fil of indice) {
		for (col of indice) {
		  salida+=document.getElementById(fil+col).innerHTML+",";
		}
		salida=salida.substr(0, salida.length-1)+";";
	}
	salida=salida.substr(0, salida.length-1);

	console.log(salida);

	httpSdk.open("POST","compruebaSdk.php",true);
	httpSdk.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	httpSdk.send(salida);
}