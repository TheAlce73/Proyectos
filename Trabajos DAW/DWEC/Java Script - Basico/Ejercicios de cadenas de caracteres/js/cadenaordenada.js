function cadenaordenada() {
	var c=document.getElementById("cadena");
	var cadena;

	document.getElementById("salida").innerHTML="";

	if(c==null){
		console.log("No existe el elemento cadena");
	}else{
		cadena=c.value;
		var tam=cadena.length;
		var salida="";
		
		if(tam==0 || tam==1){
			salida="cadena ordenada";
		}else{
			var ordenada=true;
			var contador=0;

			do{
				if (cadena.charAt(contador)>cadena.charAt(contador+1)) 
					ordenada=false;
				contador++;
			}while(ordenada && (contador<tam-1));

			if(ordenada){
				salida="cadena ordenada";
			}else{
				salida="cadena desordenada";
			}

		}

		document.getElementById("salida").innerHTML=salida;

		
	}
}