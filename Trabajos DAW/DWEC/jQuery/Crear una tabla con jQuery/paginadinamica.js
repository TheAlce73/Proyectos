console.log("hola");

$(document).ready(function(){
	
	$("body").append('Fila: <input type="text" id="fila">');
	$("body").append('<br>');
	$("body").append('<br>');

	$("body").append('Columna: <input type="text" id="col">');
	$("body").append('<br>');
	$("body").append('<br>');

	$("body").append('<button id="boton">Crea tabla</button>');
	$("body").append('<br>');
	$("body").append('<br>');


	$("body").append('<button id="boton2">Rellana Tabla</button>');
	$("body").append('<br>');
	$("body").append('<br>');

	$("body").append('<button id="boton3">Borrar</button>');

	/*$("body").prepend('<button id="boton2">Rellana Tabla</button>');
	$("body").append('<br>');
	$("body").append('<br>');*/
    // Te lo pone antes de los parrafos


    $("#boton").click(crearTabla);

	$("#boton2").click(rellenaTabla);

	$("#boton3").click(Borrar);

	});
	function crearTabla(){

		
		$("#div").remove();
		$("body").append('<div id="div"></div>');
		$("div").append('<p>-----------------------------------------</p>');

		var filas=document.getElementById("fila").value;
		var columnas=document.getElementById("col").value;

		$("div").append('<h1 id="h1">Tabla de '+filas+' filas y '+columnas+' columnas </h1>');

		$("div").append('<table id="tabla"></table>');


		for (var i = 0; i< filas; i++) {
			$("table").append("<tr></tr>");
		}
		
		

		for (var i = 0; i < columnas; i++) {
			$("tr").append("<td>1</td>");
		}

		$("div").append('<p>-----------------------------------------</p>');

	}
	function rellenaTabla(){
		$('#fila').val("10");
		$('#col').val("10");

	}

	function Borrar(){
		$("#div").remove();
	}
