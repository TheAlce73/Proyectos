function tipoDato(){
	var dato;
	dato=prompt("Introduce un dato");
	console.log(dato);
	dato=dato;
	if(dato==null){
		console.log("Boton de cancelar dado");
	}else{
		if (dato==="") {
			console.log("El dato esta vacio");
		}	else{
			var dat = parseInt(dato);
				if (!isNaN(dat)) {
					console.log("numero");
				}
				else{
					console.log("cadena de texto");
				}
			
		}
	}


}
window.onload=tipoDato;
