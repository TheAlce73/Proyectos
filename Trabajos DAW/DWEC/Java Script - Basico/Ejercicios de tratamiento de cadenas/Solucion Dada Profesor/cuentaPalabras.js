function cuentaPalabras() {
	console.log("Vamos a contar palabras:");

	var texto = document.getElementById('palabras').value;
	var letra;
	var contPal=0;
	var enPalabra=true;
	var separadores=" ;,.";

	for (letra of texto) {
		console.log(letra);
		if (separadores.indexOf(letra)==-1){
			console.log(1);
			if(enPalabra){
				contPal++;
				enPalabra=false;
				console.log(2);
			}
		}else{
			enPalabra=true;
			console.log(3);
		} 
	}

	console.log("El numero de palabras es "+contPal);
}