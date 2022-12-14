var parrafo;
function Pm(cadena){
	parrafo.innerHTML+=cadena+"</br>";
}
function Maths(){

	parrafo=document.getElementById("hola");

	Pm(Math.E);
	Pm(Math.PI);
	Pm(Math.SQRT2);
	Pm(Math.SQRT1_2);
	Pm(Math.LN2);
	Pm(Math.LN10);
	Pm(Math.LOG2E);
	Pm(Math.LOG10E);

	var x=5.7;

	Pm(Math.round(x));
	Pm(Math.trunc(x));
	Pm(Math.random());
}
window.onload=Maths;

