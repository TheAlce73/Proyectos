function tipoDato(){
	var dato = document.getElementById("dato").value;
	console.log(dato);
	dato=dato;
	if(dato==null){
		console.log("Boton de cancelar dado");
	}else{
		if (dato=="") {
			console.log("El dato esta vacio");
		}	else{
			
				if (!Number.isNaN(Number(dato))) {
					console.log("numero");
				}
				else{
					console.log("cadena de texto");
				}
			
		}
	}


}

