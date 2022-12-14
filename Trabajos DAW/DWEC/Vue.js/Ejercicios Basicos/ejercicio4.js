Vue.component('boton-que-cuenta',{
	data: function(){
		return{
			contador:0
		}
	},
	template:'<button v-on:click="contador++">Me has pulsado {{contador}} veces</button>',
});

vm=new Vue({
	el:'#aplic',
	
});