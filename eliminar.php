<?php
include("conexion.php");
$id=$_REQUEST['id'];
$query2="DELETE FROM clientes WHERE id='$id'";
$rsultado=mysqli_query($conexion,$query2);
if($rsultado){
	header("location:paneladmin.php");
}
else{
	echo "No se ha Eliminado el usuario";
}
	mysqli_close($conexion);
?>