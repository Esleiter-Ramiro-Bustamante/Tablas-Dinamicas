function agregardatos(nombre,apellido,email,telefono) {
cadena="nombre="+ nombre + 
		"&apellido="+apellido+
		"&email="+email+
		"&telefono="+telefono;

	$.ajax({
		type:"POST",
		url:"php/agregardatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				$('#nombre').val("");
				$('#apellido').val("");
				$('#email').val("");
				$('#telefono').val("");
				alertify.success("Agregado con exito :) ");
				
			}else{
				alertify.error("Fallo el servidor :( ");
			}
		}
	});
}


function agregaform(datos){

	d=datos.split('||');
	$('#idpersona').val(d[0]);
	$('#nombreu ').val(d[1]);
	$('#apellidou').val(d[2]);
	$('#emailu').val(d[3]);
	$('#telefonou').val(d[4]);


}

function actualizaDatos(){
	// viene de <input type="text" hidden="" id="idpersona" name="">
	id=$('#idpersona').val();
	nombre=$('#nombreu ').val();
	apellido=$('#apellidou').val();
	email=$('#emailu').val();
	telefono=$('#telefonou').val();




	cadena="id="+id+
		"&nombre="+ nombre + 
		"&apellido="+apellido+
		"&email="+email+
		"&telefono="+telefono;

$.ajax({
		type:"POST",
		url:"php/actualizadatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Datos actualizados :) ");
			}else{
				alertify.error("Fallo el servidor :( ");
			}
		}
	});

	
}

function preguntarSiNo(id){
	alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?', 
		function(){ eliminarDatos(id) }
       , function(){ alertify.error('Operacion Cancelada')});
}

function eliminarDatos(id){
cadena="id="+id;
$.ajax({
type:"POST",
url:"php/eliminarDatos.php",
data:cadena,
success:function(r){
	if(r==1){
		$('#tabla').load('componentes/tabla.php');
				alertify.success("Registro eliminado! :) ");
	}else{
		alertify.error("Fallo el servidor :( ");
	}
}
});
}