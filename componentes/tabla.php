<?php 
session_start();
require_once '../php/config.php';
$conexion=conexion();
 ?>
<div class="row ">
	<div class=" table-responsive col-sm-12">
	<h2>Tabla Dinamica</h2>
		<table class="table table-hover table-condensed">
		<caption >
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
			Agregar Nuevo
			<span class="glyphicon glyphicon-plus-sign"></span>
			</button>
		</caption>
		<tr>
		<td class="info">Nombre</td>
		<td class="info">Apellido</td>
		<td class="info">Email</td>
		<td class="info">Telefono</td>
		<td class="info">Editar</td>
		<td class="info">Eliminar</td>	
		</tr>

	<?php 

	if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id_persona,nombre,apellido,email,telefono 
						from t_persona where id_persona='$idp'";
					}else{
						$sql="SELECT id_persona,nombre,apellido,email,telefono 
						from t_persona";
					}
				}else{
					$sql="SELECT id_persona,nombre,apellido,email,telefono 
						from t_persona";
				}



$result=mysqli_query($conexion,$sql);
while ($ver=mysqli_fetch_row($result)) {
	$datos= $ver[0]."||".
			$ver[1]."||".
			$ver[2]."||".
			$ver[3]."||".
			$ver[4];


	 ?>

		<tr>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
		<td><?php echo $ver[4]; ?></td>
		<td>
		
			<button type="button" class="btn btn-warning btn-lg  glyphicon glyphicon-pencil" 
			data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos; ?>')">
				
			</button>
		</td>
		<td>
			<button class="btn btn-danger btn-lg glyphicon glyphicon-trash" 
			onclick="preguntarSiNo('<?php echo $ver[0]; ?>')">
				
			</button>
		</td>
		
		</tr>
		<?php 
		}
		 ?>
		</table>
	</div>
</div>