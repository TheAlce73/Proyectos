function clickEnCelda(idCelda) {
/*
	var celda = document.getElementById(idCelda);

	var valOrig = celda.innerHTML;
*/
	var valNuevo;
	var texto="valor original: ";

	var repite=true;
	do{
		valNuevo = prompt(texto + $("#"+idCelda).html());
		switch(valNuevo){
			case "1":
			case "2":
			case "3":
			case "4":
			case "5":
			case "6":
			case "7":
			case "8":
			case "9":
				repite=false;
			break;
			default:
				texto="Valor incorrecto -"+ valNuevo+"-. valor original: ";
			break;
		}

	}while(repite);
	

	//celda.innerHTML = valNuevo;

	$("#"+idCelda).html(valNuevo);
}