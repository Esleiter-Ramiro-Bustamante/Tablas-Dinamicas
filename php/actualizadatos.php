<?php 

require_once '../php/config.php';
$conexion=conexion();
$id=$_POST['id'];
$n=$_POST['nombre'];
$p=$_POST['apellido'];
$e=$_POST['email'];
$t=$_POST['telefono'];

$sql="UPDATE  t_persona SET nombre='$n',
							apellido='$p',
							email='$e',
							telefono='$t'
WHERE id_persona='$id' ";
echo $result=mysqli_query($conexion,$sql);


 ?>