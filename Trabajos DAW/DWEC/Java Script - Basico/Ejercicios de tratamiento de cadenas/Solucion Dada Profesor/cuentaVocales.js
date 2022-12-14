function cuentaVocales() {
	console.log("Vamos a contar vocales");

	var texto = document.getElementById('vocales').value;
	var letra;
	var contVocales=0;

	var vocales="AaÁáEeÉéIiÍíOoÓóUuÚú";

	for (letra of texto) {
		if (vocales.indexOf(letra)!=-1){
			contVocales++;
		}
	}

	console.log("El numero de palabras es "+contVocales);
}