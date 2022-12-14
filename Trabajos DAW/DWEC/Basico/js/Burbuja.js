var resultado;
function Burbuja(){
	
	resultado=document.getElementById("Resultado");
	var entrada=document.getElementById("numeros").value;

	var entArray=entrada.split(",");

	var i=0;
	var ordenado=false;

	while(i<entArray.length && ordenado!=true){
		ordenado=true;
		i++;
		for (var j = 0; j < entArray.length; j++) {
			if (entArray[j]>entArray[j+1]) {
				ordenado=false;
				var aux=entArray[j];
				entArray[j]=entArray[j+1];
				entArray[j+1]=aux;
			}
		}
		
	}
	var vari=0;
	while(vari<entArray.length){
		if(vari==entArray.length-1){
		resultado.innerHTML+=entArray[vari]+"  ";
		}
		else{
			resultado.innerHTML+=entArray[vari]+" , ";
		}
		vari++;


	}
}
window.onload=Burbuja;