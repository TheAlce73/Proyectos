
function contar() {

	 document.getElementById("resultado").innerHTML="";
	 var contars= document.getElementById("cadena").value;
	 var tam=contars.length;
	 var numLetras=new Map();

	 //metodo set--> Introducit pares clave/valor
	 //metodo get --> obtener un valor por su clave

	 var contador=0;

	 var resultado="";
	 	for (x=0; x <tam ; x++) { 
					if (numLetras.has(contars.charAt(x))) {
						numLetras.set(
							contars.charAt(x),
							numLetras.get(contars.charAt(x))+1
							);
					}else{
						numLetras.set(contars.charAt(x),1);
					}
				}
				for (var clave of numLetras.keys()) {
					 resultado+="Hay "+numLetras.get(clave)+" "+clave+"</br>";
				}
	 	document.getElementById("resultado").innerHTML=resultado;
	 
}


