function calculaKprk(){

	console.clear();

	var num = document.getElementById("valInicial").value;
	document.getElementById("salida").innerHTML = "<p>numero de entrada: "+num+"</p>";

	var final=false;
	var cont=0;

	while(!final && cont<100){
		var arrNum = num.split("");
		//console.log(arrNum[0],arrNum[1],arrNum[2],arrNum[3]);

		var tam = arrNum.length;
		switch(tam){
			case 3:
				arrNum = ["0",arrNum[0],arrNum[1],arrNum[2]];
			break;
			case 2:
				arrNum = ["0","0",arrNum[0],arrNum[1]];
			break;
			case 1:
				arrNum = ["0","0","0",arrNum[0]];
			break;
		}

		arrNum.sort();
		var men = Number(arrNum[0]+arrNum[1]+arrNum[2]+arrNum[3]);

		arrNum.reverse();
		var may = Number(arrNum[0]+arrNum[1]+arrNum[2]+arrNum[3]);

		var res = may - men;

		document.getElementById("salida").innerHTML = 
		document.getElementById("salida").innerHTML + 
		"<p>esto " + may + " menos  esto " + men + " da esto " + res + "</p>";

		if(res==6174){
			final=true;
		}else{
			num = res.toString();
		}
		cont++;
	}
	if (cont>100) {
			console.log("se alcanzo el numero maximo de iteraciones");
		}
}