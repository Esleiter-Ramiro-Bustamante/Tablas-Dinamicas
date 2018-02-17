<?php 
require_once "global.php";
function conexion(){

	$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	mysqli_query( $conexion, 'SET NAMES "'.DB_ENCODE.'"');

	
return $conexion;
}





 ?>