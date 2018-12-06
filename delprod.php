<?php
include("conexion.php");
$id=$_REQUEST['id'];
$query2="DELETE FROM productos WHERE id='$id'";
$rsultado=mysqli_query($conexion,$query2);
if($rsultado==true){
	echo "<script>alert('Producto Eliminado satisfactoriamente!')</script>";
	header("location:gestorproduct.php");
}
else{
	echo "No se ha podido eliminar el producto";
}
	mysqli_close($conexion);
?>