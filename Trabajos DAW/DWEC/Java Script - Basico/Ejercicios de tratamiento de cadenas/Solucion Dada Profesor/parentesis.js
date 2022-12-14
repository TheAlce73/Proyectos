function parentesis() {
	console.log("a comprobrar parentesis");

	var texto = document.getElementById('parentesis').value;
	var letra;
	var contParen=0;
	
	for (letra of texto) {
		if (letra=="("){
			contParen++;
		}
		if (letra==")"){
			contParen--;
		}
	}
	if (contParen==0) {
		console.log("Parentesis correctos");
	}else{
		console.log("Parentesis incorrectos");
	}
}