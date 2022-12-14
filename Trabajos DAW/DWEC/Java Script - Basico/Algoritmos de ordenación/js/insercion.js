var resultado;
function insercion() {

	 resultado = document.getElementById("resultado");
	 var num= document.getElementById("numeros").value;
	 var array = num.split(",");


	for (var j=0;j<array.length;j++)
	{
		var clave = array[j];
		var i=j-1;

		while (i>0 && array[i]>clave)
		{
			array[i+1] = array[i];
			i = i-1;
		}

		array[i+1] = clave;

	}
		resultado.innerHTML =array;
	}


window.onload=insercion;
