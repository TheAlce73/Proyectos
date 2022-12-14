
function insercion() {

	 document.getElementById("resultado").innerHTML="";
	 var num= document.getElementById("cadena");
	 var cadena=num.value;
	 var tam=cadena.length;

	 if (tam==0||tam==1) {
	 	resultado="Está Ordenado";
	 }
	 else{
	 	var resultado="";

	 	var contador=0;
	 	var verdad=true;
	 	while(verdad){
	 		console.log("hey");
	 		if (contador==(tam-1)) {
	 			resultado="Está Ordenado";
	 			verdad=false;
	 		}
	 		else{
	 			if(cadena.charAt(contador)>cadena.charAt(contador+1)){
	 				resultado="No Está Ordenado";
	 				verdad=false;
	 			}
	 			contador++;
	 		}
	 		} 
	 	}
	 	document.getElementById("resultado").innerHTML=resultado;
	 }



