
function Reverso() {

	 document.getElementById("resultado").innerHTML="";
	 var num= document.getElementById("cadena");
	 var cadena=num.value;
	 var tam=cadena.length;
	var resultado="";
	 if (tam==0||tam==1) {
	 	resultado="El reverso es:"+cadena;
	 }
	 else{
	 	

	 	for (var x=tam-1; x>= 0 ; x--) { 
						
						if (x==0) {
							resultado+=cadena.charAt(x);
						}
						else{
							resultado+=cadena.charAt(x)+"";
						}
					} 
	 	}
	 	document.getElementById("resultado").innerHTML="El reverso es: "+resultado;
	 }



