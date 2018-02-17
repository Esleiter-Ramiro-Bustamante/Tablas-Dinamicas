<?php 
require_once '../php/config.php';
$conexion=conexion();
$id=$_POST['id'];

$sql="DELETE FROM t_persona WHERE id_persona='$id'";
echo $result=mysqli_query($conexion,$sql);

 ?>