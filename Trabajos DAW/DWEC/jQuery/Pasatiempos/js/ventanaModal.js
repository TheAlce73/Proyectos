function listaHistorial() {

	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			var resultado=JSON.parse(this.responseText);
			var salida="";

			for (var res of resultado) {
				salida += res + "<br />";
			}

			var listado = document.getElementById('listado');
			listado.innerHTML=salida;
	   		//muestra la ventana modal
			var mascara = document.getElementById('lamascara');
		    mascara.style.display = "block";
		}
  	};

	httpSdk.open("GET","listaHistorial.php",true);
	httpSdk.send();
}


function cargaVM(){

	var mascara = document.getElementById('lamascara');
	var btn = document.getElementById("boton");
	var cerrar = document.getElementsByClassName("cerrar")[0];
	 
	btn.onclick = listaHistorial;

	cerrar.onclick = function() {
	    mascara.style.display = "none";
	}
	window.onclick = function(event) {
	    if (event.target == mascara) {
	        mascara.style.display = "none";
	    }
	}
}

window.onload=cargaVM;