function ContarPalabra(){
	document.getElementById("texto1.1").innerHTML="";
	var texto=document.getElementById("texto1").value;
	var tamaño=texto.length;
	
	var x=0;
	
	var contador=1;
    texto=texto.replace("  "," ");
    texto=texto.replace("   "," ");
    texto=texto.replace("    "," ");
    texto=texto.replace(" , "," ");
    texto=texto.replace(" ; "," ");
    texto=texto.replace(" . "," ");
    texto=texto.replace(" ."," ");
    texto=texto.replace(" ,"," ");
    texto=texto.replace(" ;"," ");
    texto=texto.replace(". "," ");
    texto=texto.replace(", "," ");
    texto=texto.replace("; "," ");
    texto=texto.replace(",,"," ");
    texto=texto.replace(";;"," ");
    texto=texto.replace(".."," ");
    texto=texto.replace(",,,"," ");
    texto=texto.replace(";;;"," ");
    texto=texto.replace("..."," ");
    
    window.alert(texto);

	while(x<tamaño){
		
		if (texto.charAt(x)==" "||texto.charAt(x)==";"||texto.charAt(x)==","||texto.charAt(x)==".") {

			

				contador++;
			}
			
			
		
		x++;
	}
	document.getElementById("texto1.1").innerHTML="Hay "+contador+" palabras";
	return false;
}

function ContarVocales(){
	document.getElementById("texto2.1").innerHTML="";
	var texto=document.getElementById("texto2").value;
	var tamaño=texto.length;
	
	var x=0;
	
	var contador=0;

	while(x<tamaño){
		
		if (texto.charAt(x)=="a"||texto.charAt(x)=="à"||texto.charAt(x)=="á"||texto.charAt(x)=="A"||texto.charAt(x)=="Á"||texto.charAt(x)=="À"||
			texto.charAt(x)=="e"||texto.charAt(x)=="è"||texto.charAt(x)=="é"||texto.charAt(x)=="E"||texto.charAt(x)=="É"||texto.charAt(x)=="È"||
			texto.charAt(x)=="i"||texto.charAt(x)=="ì"||texto.charAt(x)=="í"||texto.charAt(x)=="I"||texto.charAt(x)=="Í"||texto.charAt(x)=="Ì"||
			texto.charAt(x)=="o"||texto.charAt(x)=="ò"||texto.charAt(x)=="ó"||texto.charAt(x)=="O"||texto.charAt(x)=="Ó"||texto.charAt(x)=="Ò"||
			texto.charAt(x)=="u"||texto.charAt(x)=="ù"||texto.charAt(x)=="ú"||texto.charAt(x)=="U"||texto.charAt(x)=="Ú"||texto.charAt(x)=="Ù") {

			contador++;
			
			
		}
		x++;
	}
	document.getElementById("texto2.1").innerHTML="Hay "+contador+" vocales";
	return false;
}

function ContarParentesis(){
	document.getElementById("texto3.1").innerHTML="";
	var texto=document.getElementById("texto3").value;
	var tamaño=texto.length;
	var abierto=0;
	var cerrado=0;

	var x=0;
	var y=0;

	while(x<tamaño){
		
		if (texto.charAt(x)=="(") {
			abierto++;
			y++;
		}else if(texto.charAt(x)==")" && y!=0){	 
			cerrado++;	
			y--;
		}
		x++;
	}
	if (abierto==cerrado) {
		document.getElementById("texto3.1").innerHTML="Estan bien cerrados";
	}else{
		document.getElementById("texto3.1").innerHTML="Estan mal cerrados";
	}
		
	
	return false;
}

