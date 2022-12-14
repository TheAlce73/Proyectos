Vue.component('h3-mod',{
	props: ['nombre','ident'],
	
	template:'<h4>{{nombre}}-{{ident}}</h4>'
});

vm=new Vue({
	el:'#ejr5',
	data:{
		nombres:[
			{id:0, nom:'Juan'},
			{id:1, nom:'Pepe'},
			{id:2, nom:'Josep'}
	]},
});

vm.nombres.push(JSON.parse('{"id":3 , "nom":"jaimito"}'));

$("#intro").click(function(){
	vm.nombres.push(JSON.parse('{"id":'+vm.nombres.length+' , "nom":"'+$("#nombre").val()+'"}'));
});