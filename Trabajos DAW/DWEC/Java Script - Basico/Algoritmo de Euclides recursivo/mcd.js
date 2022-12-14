function mcd(n,m){
	if (n==m) {
		return n;
	}else{
		if (n>m) {
			return mcd(n-m,m);
		}else{
			return mcd(n,m-n);
		}
	}
}
function minimo(){
	var n=document.getElementById("numero1").value;
	var m=document.getElementById("numero2").value;
	document.getElementById("resultado").innerHTML="El Minimo Comun Multiplo es: "+mcd(n,m);
}