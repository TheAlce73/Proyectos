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
function fallos(r){
	console.log("hola");
	console.log(r);
	x++;
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
			break
		default:
			bas.font="10pt Verdana";
			bas.fillStyle = "blue";
			bas.fillText("Has perdido",10,15);
			break
	}
	bas.stroke();
}
window.onload=ahorcado;