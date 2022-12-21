var datos;
var idProdMostrado;
var cesta=[];
//para que cambie precio
function atualizar(){
 $.getJSON("videojuegos.php", function(data, status){
    datos = data;
  });
}
atualizar();


$(document).ready(function (){
	console.log("Inicio");
	atualizar();
	$("#prodAnt").click(fProdAnt);
	$("#prodSig").click(fProdSig);
	$("#adquirir").click(anadir);	
	$("#carrito").click(mostrar);
	
	idProdMostrado = 0;

	rellenaDatos(idProdMostrado);

	
});

function fProdAnt(){
	atualizar();

	idProdMostrado--;
	if (idProdMostrado == -1) {
		idProdMostrado = 1;
	}
	rellenaDatos(idProdMostrado);
}

function fProdSig(){
	idProdMostrado++;
	if (idProdMostrado == 2) {
		idProdMostrado = 0;
	}
	rellenaDatos(idProdMostrado);
}

function rellenaDatos(X){

	$("#img").attr("src",datos[X]["imagen"]);

	$("#img1").attr("src",datos[X]["imagenes"][0]);
	$("#img11").attr("src",datos[X]["imagenes"][0]);

	$("#img2").attr("src",datos[X]["imagenes"][1]);

	$("#img3").attr("src",datos[X]["imagenes"][2]);

	$("#titulo").html(
			'<h1>'+datos[X]["nombre"]+'</h1>');

	$("#foto").html(
			'<img src="'+datos[X]["imagen"]+'"></img>');

	$("#texto").html(
			'<p>'+datos[X]["def"]+'</p>');

	var html="";

	/*for (var i = datos[X]["caract"].length-1; 0<= i; i--) {
			html+="<li>"+datos[X]["caract"][i]+"</li>";
		}
*/	
}

function cambiaPantalla(x){
	$("#img1").attr("src",datos[idProdMostrado]["imagenes"][x]);
}



function anadir(){
	console.log("añadido");
	cesta.push(idProdMostrado);
	$("#cesta").html("Cesta("+cesta.length+")");
}

function mostrar(){
	var html2="";
	for (var i = cesta.length-1; 0<= i; i--) {
			html2+="<li>"+datos[cesta[i]]["nombre"]+"</li>";
		}
	$("#productos").html(html2);
}