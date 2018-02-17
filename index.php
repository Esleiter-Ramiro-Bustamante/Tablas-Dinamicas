<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>
	<div class="container">

  <div id="buscador"></div>
		<div id="tabla">
		
	</div>
	</div>

	<!-- Modal para registros nuevos
	<caption >
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
			Agregar Nuevo
			<span class="glyphicon glyphicon-plus-sign"></span>
			</button>
		</caption>
		esta en el archivo tabla.php
	 -->

<!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nuevo Registo</h4>
      </div>
      <div class="modal-body">
        <label>Nombre</label>
        <input type="text" name="" id="nombre" class="form-control input-sm">
        <label>Apellido</label>
        <input type="text" name="" id="apellido" class="form-control input-sm">
        <label>Email</label>
        <input type="text" name="" id="email" class="form-control input-sm">
        <label>Telefono</label>
        <input type="text" name="" id="telefono" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="guardarnuevo"  >
        
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para editar registros 

			<td>
		
			<button class="btn btn-warning glyphicon glyphicon-pencil" 
			data-toggle="modal" data-target="#modalEdicion">
				
			</button>
		</td>
		esta en el archivo tabla.php
 -->
<!-- Modal -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      <input type="text" hidden="" id="idpersona" name="">
        <label>Nombre</label>
        <input type="text" name="" id="nombreu" class="form-control input-sm">
        <label>Apellido</label>
        <input type="text" name="" id="apellidou" class="form-control input-sm">
        <label>Email</label>
        <input type="text" name="" id="emailu" class="form-control input-sm">
        <label>Telefono</label>
        <input type="text" name="" id="telefonou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
        Actualizar
        </button>
     
      </div>
    </div>
  </div>
</div>


</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>


<script type="text/javascript">
  $(document).ready(function(){
$('#guardarnuevo').click(function(){
  nombre=$('#nombre').val();
  apellido=$('#apellido').val();
  email=$('#email').val();
  telefono=$('#telefono').val();
agregardatos(nombre,apellido,email,telefono);
});


$('#actualizadatos').click(function() {
 actualizaDatos();
});
  });

</script>