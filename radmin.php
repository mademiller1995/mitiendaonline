<?php
include("conexion.php");
session_start();
//variables almacenadas 
$adminis=$_POST['admin'];
$clave=$_POST['contrasena'];
//sesion
$_SESSION['admin']=$adminis;
//query 
$sql2="Select * from administrador where nombre='$adminis' and contrasena='$clave'";
$consulta=mysqli_query($conexion, $sql2);
$filas=mysqli_num_rows($consulta);
if($filas>0){
	header('location:paneladmin.php');
}
else{
		header('location:cerrarsesion.php');
}
/*cerrar bbdd cnexion*/
mysqli_close($conexion);
?>