
function calculo(){
	var numero=document.getElementById("numero").value;
	



	var resultado=document.getElementById("resultado");

	numero=numero*Math.PI/180;

	if(document.getElementById("cal1").checked==true){
		 	numero=Math.sin(numero);
		 	}else{
		 		if (document.getElementById("cal2").checked==true) {
		 			numero= Math.cos(numero);
		 		}else{
		 			numero= Math.tan(numero);
		 		}
		 }

	resultado.innerHTML="El resultado es : "+numero;
	
	
 }

