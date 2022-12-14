function reverse() {
	var c=document.getElementById("cadena");
	var cadena;

	document.getElementById("salida").innerHTML="";

	if(c==null){
		console.log("No existe el elemento cadena");
	}else{
		cadena=c.value;
		var tam=cadena.length;
		var salida="";

		for(var i = tam-1; i>=0; i--){
			salida+=cadena.charAt(i);
		}

		document.getElementById("salida").innerHTML=salida;

		
	}
}