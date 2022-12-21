var datos;
var idProdMostrado;
var cesta=[];
//para que cambie precio
function atualizar(){
 $.getJSON("catalogo.php", function(data, status){
    datos = data;
  });
}
atualizar();


$(document).ready(function (){
	console.log("Inicio");
	atualizar();
	$("#prodAnt").click(fProdAnt);
	$("#prodSig").click(fProdSig);
	$("#cesta").click(anadir);	
	$("#mostrars").click(mostrar);	
	idProdMostrado = 0;

	rellenaDatos(idProdMostrado);

	
});

function fProdAnt(){
	atualizar();

	idProdMostrado--;
	if (idProdMostrado == 3) {
		idProdMostrado = 0;
	}
	rellenaDatos(idProdMostrado);
}

function fProdSig(){
	console.log(cesta.length);
	atualizar();

	idProdMostrado++;
	if (idProdMostrado == 3) {
		idProdMostrado = 0;
	}
	rellenaDatos(idProdMostrado);
}

function rellenaDatos(X){

	$("#imagen").html(
		'<img src="'+datos[X]["imagen"]+'"></img>');

	$("#nomProd").html(
			'<h2 class"font-italic fot-wight-bold">'+datos[X]["nombre"]+'</h2>');

	$("#precio").html(
		datos[X]["precio"]);

	$("#stock").html(
		datos[X]["stock"]);
	var html="";

	/*for (var i = datos[X]["caract"].length-1; 0<= i; i--) {
			html+="<li>"+datos[X]["caract"][i]+"</li>";
		}
*/
	for(lista of datos[X]["caract"]){
			html+="<li>"+lista+"</li>";
	}

	$("#lista").html(
		html
			);
	
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

	