var mv=new Vue({
	el: '#salida',
	data:{
		id:0,
		nombre:"",
		apellidos:"",
		foto:""
	}
});
$("#sig").click(function(){
	escritura(0);
});
$("#ant").click(function(){
	escritura(0.5);
});
$("#des").click(function(){
	escritura(1);
});

function escritura(x){
	if (x==0) {
		$.get('http://cliente.carry.es/vue/pasalista.php?sig',function(data,status){
			var persona=JSON.parse(data);
			mv.foto=persona.foto;
			mv.id=persona.id;
			mv.nombre=persona.nombre;
			mv.apellidos=persona.apellidos;
		})
	}else{
		$.get('http://cliente.carry.es/vue/pasalista.php?ant',function(data,status){
			var persona=JSON.parse(data);
			mv.foto=persona.foto;
			mv.id=persona.id;
			mv.nombre=persona.nombre;
			mv.apellidos=persona.apellidos;
		})
	}

	if (x==1) {
		$.get('http://cliente.carry.es/vue/pasalista.php?destruye',function(data,status){
			
		})
	}

}
