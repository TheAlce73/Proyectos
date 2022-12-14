function validaBoleto(){
	window.alert("Hola");
	var num=document.getElementById("numeros").value;
	var est= document.getElementById("estrellas").value;

	estArr=est.split(",");
	numArr=num.split(",");

	if (estArr.length!=2) {
		window.alert("Numeros Estrellas Mal introducidos. Recuerda Son 2 numeros y van separados por coma");
	}
		if (numArr.length!=5) {
					window.alert("Numeros Mal introducidos. Recuerda Son 5 numeros y van separados por coma");
		}



	var x=0;
	while(x<=estArr.length-1){
		if(estArr[x]>0&&estArr[x]<10){}
		else{
				window.alert("Uno de las estrellas no se encuentra entre 1 y 9.Introduce valores correctos. ");
			}
		x++;
	}
	 x=0;
	while(x<=numArr.length-1){
		if(numArr[x]>0&&numArr[x]<56){}
		else{
				window.alert("Uno de los numeros no se encuentra entre 1 y 55 .Introduce valores valido ");
			}
		x++;
	}

}