var parrafo;
function Pm(cadena){
	parrafo.innerHTML+=cadena+"</br></br>";
}
function Maths(){

	parrafo=document.getElementById("hola");
	Pm("<b>ESTUDIO FUNCION MATH JS</b></br>");
	Pm("Numero e: "+Math.E);
	Pm("Numero PI: "+Math.PI);
	Pm("Raiz Cuadrad de 2: "+Math.SQRT2);
	Pm("Raiz Cuadrada de 1/2: "+Math.SQRT1_2);
	Pm("Logaritmo Neperiano de 2: "+Math.LN2);
	Pm("Logaritmo Neperiano de 10: "+Math.LN10);
	Pm("Logarito 2*E: "+Math.LOG2E);
	Pm("Logartimo 10*E: "+Math.LOG10E);

	Pm("<b>Estudio del numero 5,7</b>");
	var x=5.7;

	Pm("Redondeo: "+Math.round(x));
	Pm("Truncar: "+Math.trunc(x));

	Pm("<b>Numero Aleatorio entre 0 y 1</b>");
	Pm(Math.random());
}
window.onload=Maths;

