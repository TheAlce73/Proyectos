console.log("hola");

var hour=new Date().getHours();
console.log(hour);
if(hour<=6){
	window.alert("Es por la noche"+hour);
}else if(hour<=12){
	window.alert("Es por la mañana"+hour);
}else if(hour<=8){
	window.alert("Es por la tarde"+hour);
}else{
	window.alert("Es por la noche"+hour);
}

var color="rojo";
switch(color){
	case "rojo":
	console.log(color);
	break;
	default:
	console.log("Color no valido");
	break;
}