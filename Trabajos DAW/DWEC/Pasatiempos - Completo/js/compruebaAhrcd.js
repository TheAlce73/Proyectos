var listaLetras = "";
var jugando=true;


function compruebaAhorcado() {

	if(!jugando){
		document.getElementById("salida").innerHTML="Partida finalizada. Comienza de nuevo.";
		return;
	}

	var pos = listaLetras.indexOf(document.getElementById("letra").value);

	if (pos!=-1) {
		document.getElementById("salida").innerHTML="Ya usaste esta letra.";
		return;
	}else{
		listaLetras+=document.getElementById("letra").value;
		console.log(listaLetras);
	}

	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
			var respuestaComp = JSON.parse(this.responseText);

			//cuatro repuestas posibles, ejemplos:
			//0; agotaste todos las oportunidades
			//1;3 la letra no existe y llevas tres fallos
			//2;p1;p3 la letra existe y está en la posición 1 y 3 y YA NO quedan mas letras. El jugador ganó.
			//3;p4 la letra existe y está en la posición 4

			var res="";

			switch(respuestaComp[0]){
				case "0":
					res="PERDISTE. Alcanzaste el máximo de fallos."
					pintaSiguiente(7);
					jugando=false;
					break;
				case "1":
					res="Esta letra no está. Llevas "+respuestaComp[1]+ " fallos";
					pintaSiguiente(respuestaComp[1]);
					break;
				case "2":
					res="GANASTE. ";
					jugando=false;
				case "3":
					res+="La letra si está."
					var ltr = document.getElementById("letra").value;
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

	var enviar="letra="+document.getElementById("letra").value;
	//enviar=b
	httpSdk.open("POST","compruebaAhorcado.php",true);
	httpSdk.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	httpSdk.send(enviar);
}

function comenzarDeNuevo() {
	listaLetras = "";
	jugando=true;

	var httpSdk = new XMLHttpRequest();

	httpSdk.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("relleno").innerHTML=this.responseText;
		}
	}
	httpSdk.open("GET","nuevoAhorcado.php",true);
	httpSdk.send();

}

function pintaHorca() {
	
	var canvas = document.getElementById('ahorcado');
	var ctx = canvas.getContext("2d");

	//pinta la base
	ctx.fillStyle="#000000";
	ctx.fillRect(0,280,100,20);

	//pinta el poste
	ctx.fillStyle="#000000";
	ctx.fillRect(40,60,20,220);

	//pinta la viga
	ctx.fillStyle="#000000";
	ctx.fillRect(40,40,200,20);
}

function pintaSiguiente(fallos){

	var canvas = document.getElementById('ahorcado');
	var ctx = canvas.getContext("2d");

	switch(fallos){
		case 1:
			console.log("cuerda");
			//50,175 100,175
			ctx.beginPath();
			ctx.moveTo(200, 50);
			ctx.lineTo(200, 100);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		case 2:
			console.log("cabeza");
			ctx.beginPath();
			ctx.lineWidth = 5;
			ctx.arc(200, 110, 10, 0, 2 * Math.PI);
			ctx.stroke();	
		break;
		case 3:
			console.log("cuerpo");
			ctx.beginPath();
			ctx.moveTo(200, 120);
			ctx.lineTo(200, 180);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		case 4:
			console.log("brazo izquierdo");
			ctx.beginPath();
			ctx.moveTo(200, 140);
			ctx.lineTo(160, 180);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		case 5:
			console.log("brazo derecho");
			ctx.beginPath();
			ctx.moveTo(200, 140);
			ctx.lineTo(240, 180);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		case 6:
			console.log("pierna izquierda");
			ctx.beginPath();
			ctx.moveTo(200, 180);
			ctx.lineTo(160, 220);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		case 7:
			console.log("pierna derecha");
			ctx.beginPath();
			ctx.moveTo(200, 180);
			ctx.lineTo(240, 220);
			ctx.lineWidth = 5;
			ctx.stroke();
		break;
		default:
			fallos=0;
		break;
	}
	console.log(fallos);
}

window.onload = pintaHorca;