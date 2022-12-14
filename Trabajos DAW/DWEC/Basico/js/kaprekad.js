function kapre(){
	var num=document.getElementById("numeros").value;
	numArr=num.split("");
	console.log(numArr[0]);

	if(numArr.length>=5){
		window.alert("Introduce un numero entre el 1 y el 9999");
	}
	else{
		window.alert("Va bien");

		numArr.sort();
		console.log(numArr);
		numAr=Number(numArr[0]+numArr[1]+numArr[2]+numArr[3]);

		var numArr1=numArr.reverse();
		console.log(numArr1);
		numAr1=Number(numArr[0]+numArr[1]+numArr[2]+numArr[3]);
		

		var resultado=numAr1-numAr;
		window.alert(resultado);
		while(resultado!=6174){
			var num1=resultado.toString();
			num11=num1.split("");

			switch(num11.length){
				case 3:
				    num11=["0",num11[0],num11[1],num11[2]];
					break;
				case 2:
				 	num11=["0","0",num11[1],num11[2]];
				 	break;
				 case 1:
				 	num11=["0","0","0",num11[2]];
				 	break;
				
			}
			num11.sort();
			
			var num01=Number(num11[0]+num11[1]+num11[2]+num11[3]);
			window.alert(num01);

			var num22=num11.reverse();
			numAr1=Number(num22[0]+num22[1]+num22[2]+num22[3]);
			resultado=numAr1-numAr;
			console.log(resultado);
		}
	

		

	}


}