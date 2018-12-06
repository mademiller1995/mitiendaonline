<?php
$conexion=mysqli_connect('localhost','root','','tienda');
if($conexion==True){
	echo "<script>alert(conectado correctamente)</script>";
}
else{
	echo "Conexión fallida.";
}
?>