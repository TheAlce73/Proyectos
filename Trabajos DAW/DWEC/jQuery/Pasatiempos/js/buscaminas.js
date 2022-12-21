function clickEnCeldaBM(fila, columna) {

	$.get("compBuscaminas.php?fila="+fila+"&columna="+columna, function(data, status){
    	$("#"+fila+columna).html(data);
	});

	/*
	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var elemento = document.getElementById(fila+""+columna).innerHTML=this.responseText;
		}
  	};

	httpSdk.open("GET","compBuscaminas.php?fila="+fila+"&columna="+columna,true);
	httpSdk.send();	
	*/
}