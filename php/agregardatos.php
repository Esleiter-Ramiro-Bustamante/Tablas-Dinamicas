<?php 

require_once '../php/config.php';
$conexion=conexion();

$n=$_POST['nombre'];
$p=$_POST['apellido'];
$e=$_POST['email'];
$t=$_POST['telefono'];

$sql="INSERT INTO t_persona(nombre,apellido,email,telefono )
VALUES ('$n','$p','$e','$t') ";



echo $result=mysqli_query($conexion,$sql);

			
		

 ?>