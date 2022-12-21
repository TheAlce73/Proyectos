var listaLetras = "";


function compruebaAhorcado() {
	var p;

	var pos = listaLetras.indexOf($("#letra").val());

	console.log(pos);

	if (pos!=-1) {
		$("#salida").html("Ya usaste esta letra.");
		return;a
	}else{
		
		listaLetras+=$("#letra").val();
	}

	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {

			var respuestaComp =JSON.parse(this.responseText);


			//tres repuestas posibles, ejemplos:
			//0; agotaste todos las oportunidades
			//1;3 la letra no existe y llevas tres fallos
			//2;1;3 la letra existe y está en la posición 1 y 3 y YA NO quedan mas letras. El jugador ganó.
			//3;4 la letra existe y está en la posición 4

			var res="";

			switch(respuestaComp[0]){
				case "0":
					fallos(7);
					res="Alcanzaste el máximo de fallos."
					
					break;
				case "1":
					res="Esta letra no está. Llevas "+respuestaComp[1]+ "fallos";
					fallos(respuestaComp[1]);
					break;
				case "2":
					res="GANASTE. "
					

				case "3":
					res+="La letra si está."
					var ltr = $("#letra").val();
					var tam = respuestaComp.length;
					for (var i = 1; i < tam;i++){
						document.getElementById(respuestaComp[i]).innerHTML=ltr;
					}
					break;
				default:
					res="Datos incorrectos";
			}

			document.getElementById("salida").innerHTML=res;
		}
  	};

	var enviar="letra="+$("#letra").val();

	httpSdk.open("POST","compruebaAhorcado.php",true);
	httpSdk.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	httpSdk.send(enviar);


}

function comenzarDeNuevo() {
	listaLetras = "";


	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
			$("relleno").html(this.responseText);
		}
	}
	httpSdk.open("GET","nuevoAhorcado.php",true);
	httpSdk.send();

}
var x=0;
function ahorcado(){

		var base=document.getElementById("myCanvas");
		var bas=base.getContext("2d");
		bas.beginPath();
		bas.fillStyle="#000000";
	   
		bas.fillRect(50,190,100,5);
		bas.fillRect(100,190,5,-100);
		bas.fillRect(100,90,60,5);

	
		
	
}
function fallos(x){

	console.log(x);
	var base=document.getElementById("myCanvas");
	var bas=base.getContext("2d");
	bas.beginPath();
	bas.fillStyle="#000000";
	bas.lineWidth=2;

	switch(x){
		case 1:
			bas.fillRect(160,90,3,30)
			break
		case 2:
			bas.arc(160, 130, 10, 0, 2 * Math.PI)
			break
		case 3:
			bas.fillRect(160,140,2,20)
			break
		case 4:
			bas.moveTo(160,160)
			bas.lineTo(150,180)
			break
		case 5:
			bas.moveTo(160,160)
			bas.lineTo(170,180)
			break
		case 6:
			bas.moveTo(160,140)
			bas.lineTo(145,150)
			break
		case 7:
			bas.moveTo(160,140)
			bas.lineTo(175,150)
			bas.font="10pt Verdana";
			bas.fillStyle = "blue";
			bas.fillText("Has perdido",10,15);
			break
		default:
			
			break
	}
	bas.stroke();

}
window.onload=ahorcado;
