function validaUser(){
	var nom=document.getElementById("nombre").value;
	var con=document.getElementById("contraseña").value;

	var valor=false;

	if (nom=="alvaro"&&con=="alce") {
		valor=true;
	}
	return valor;
}