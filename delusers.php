<?php
include("conexion.php");
$id=$_REQUEST['id'];
$query2="DELETE FROM clientes WHERE id='$id'";
$rsultado=mysqli_query($conexion,$query2);
if($rsultado){
	header("location:gestorusers.php");
}
else{
	echo "No se ha eliminado el usuario";
}
	mysqli_close($conexion);
?>