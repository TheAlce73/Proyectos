function validaform() {

	var correcto=true;

	if ($("#user").length==0 || $("#user").val()==""){
		$("#user").css("background", "Bisque");
		correcto=false;
	}

	if ($("#user").length==0 || $("#pass").val()==""){
		$("#pass").css("background", "Bisque");
		correcto=false;
	}

	if(!correcto && $("#aviso").length!=0 ){ 
		$("#aviso").html("Los dos campos son obligatorios");
		$("#aviso").css("color","red");
	}

/*
	var valUser = document.getElementById("user");
	var valPass = document.getElementById("pass");

	if(valUser==null || valUser.value==""){
		valUser.style.background="Bisque";
		correcto=false;
	}

	if(valPass==null || valPass.value==""){
		valPass.style.background="Bisque";
		correcto=false;
	}

	if(!correcto){
		var aviso = document.getElementById("aviso");
		if(aviso!=null){
			aviso.innerHTML="Los dos campos son obligatorios";
			aviso.style.color="red";
		}
	}
*/
	return correcto;
}

$(document).ready(function (){
	//onsubmit="return validaform()"
	$("#formEntrada").submit(validaform);
});



