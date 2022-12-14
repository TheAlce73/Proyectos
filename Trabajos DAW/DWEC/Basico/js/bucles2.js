var sal=false;
var contador=0;
var aleatorio=Math.random();

console.log(aleatorio);

console.log("For");
console.log("---------");
if(aleatorio>0.5){
	sal=true;
}else{
for(sal;sal!=true;sal){
	contador++;
	contador++;
	console.log(contador);
	if(contador>8){
		sal=true;
	}
}
}
console.log("DO While");
console.log("---------");
sal=false;
 contador=0;
if(aleatorio>0.5){
	sal=true;
}else{
do{

    contador++;
	contador++;
	console.log(contador);

	if(contador>8){
		sal=true;
	}
}while(sal!=true)
}