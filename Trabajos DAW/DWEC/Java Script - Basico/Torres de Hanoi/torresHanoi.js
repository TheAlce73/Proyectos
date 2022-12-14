function pinta() {
	document.getElementById('1A').style.backgroundColor="#CCCCCC";
	document.getElementById('2A').style.backgroundColor="#CCCCCC";
	document.getElementById('3A').style.backgroundColor="#CCCCCC";
	document.getElementById('1B').style.backgroundColor="#CCCCCC";
	document.getElementById('2B').style.backgroundColor="#CCCCCC";
	document.getElementById('3B').style.backgroundColor="#CCCCCC";
	document.getElementById('1C').style.backgroundColor="#CCCCCC";
	document.getElementById('2C').style.backgroundColor="#CCCCCC";
	document.getElementById('3C').style.backgroundColor="#CCCCCC";
}

function hanoi(n,orig,aux,dest) {
	if (n == 1 ){
		var paloOrig = orig[0];
		var paloDest = dest[0];
		var disco = '';
		if (orig[1]!=''){
			disco = orig[1];
			orig[1]='';
		}else if (orig[2]!=''){
			disco = orig[2];
			orig[2]='';
		}else{
			disco = orig[3];
			orig[3]='';
		}

		if(dest[3]==''){
			document.getElementById('salida').innerHTML+="<br>fin:"+'3'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('3'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
		}else if (dest[2]==''){
			document.getElementById('salida').innerHTML+="<br>fin:"+'2'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('2'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
		}else{
			document.getElementById('salida').innerHTML+="<br>fin:"+'1'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('1'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
		}
		document.getElementById(disco+paloOrig).innerHTML='';		
	}else{
		hanoi(n-1,orig,dest,aux);

		var paloOrig = orig[0];
		var paloDest = dest[0];
		var disco = '';

		if (orig[1]!=''){
			disco = orig[1];
			orig[1]='';
		}else if (orig[2]!=''){
			disco = orig[2];
			orig[2]='';
		}else{
			disco = orig[3];
			orig[3]='';
		}

		

		if(dest[3]==''){
			document.getElementById('salida').innerHTML+="<br>"+'3'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('3'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
			dest[3]=disco;
		}else if (dest[2]==''){
			document.getElementById('salida').innerHTML+="<br>"+'2'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('2'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
			dest[2]=disco;
		}else{
			document.getElementById('salida').innerHTML+="<br>"+'1'+paloDest+'--'+document.getElementById(disco+paloOrig).innerHTML;
			document.getElementById('1'+paloDest).innerHTML=document.getElementById(disco+paloOrig).innerHTML;
			dest[1]=disco;
		}

		document.getElementById(disco+paloOrig).innerHTML='';

		hanoi(n-1,aux,orig,dest);
	}
}
function resuelve(){
	var A = ['A','1','2','3'];
	var B = ['B','','',''];
	var C = ['C','','',''];
	hanoi(3,A,B,C);
}
window.onload=pinta;
