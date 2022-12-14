var codHtml="";
for (i=0;i<5;i++) {
	var tabla="Tabla del "+(i+1);
	codHtml+="<table>"+tabla
	console.log(tabla);
	var a=1;
	for(x=1;x<11;x++){
		codHtml+="<tr><td>"+(i+1)+" x "+x+" = "+((i+1)*x)+"</td></tr>"
		var por=" x ";
		console.log((i+1)+por+a+" = "+((i+1)*x));
		a++;
	}
	codHtml+="</table></br>"

}
document.getElementById("demo").innerHTML=codHtml;