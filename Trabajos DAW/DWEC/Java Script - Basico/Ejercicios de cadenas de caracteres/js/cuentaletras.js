var salida="";

function cuentaletras() {

	var c=document.getElementById("cadena");
	var cadena;
	var numLetras = new Map();

	//metodo set -> introducir pares clave/valor
	//metodo get -> obtener un valor por su clave
	//metodo has -> cierto si la clave existe


	document.getElementById("salida").innerHTML="";

	if(c==null){
		console.log("No existe el elemento cadena");
	}else{
		cadena=c.value;
		var tam=cadena.length;


		for(var i = tam-1; i>=0; i--){
			if(numLetras.has(cadena.charAt(i))){
				numLetras.set(
					cadena.charAt(i),
					numLetras.get(cadena.charAt(i)) + 1
				);
			}else{
				numLetras.set(cadena.charAt(i),1);
			}
		}

		for (var clave of numLetras.keys()) {
  			console.log(clave+"-"+numLetras.get(clave));
		}

		console.log("------------------------------------");

		numLetras.forEach(
			function(valor,clave){
				salida+=clave+"---"+valor+"<br />";
			}
		);

		document.getElementById("salida").innerHTML=salida;

	}
}