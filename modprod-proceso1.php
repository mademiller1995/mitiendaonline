<?php
  include "conexion.php";
session_start();
$adminis = $_SESSION['admin'];
if($adminis == null || $adminis = ''){
	echo "No eres administrador";
	die();
}
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $marca=$_POST['marca'];
  $promocion=$_POST['promocion'];
  $capacidad=$_POST['capacidad'];
  $color=$_POST['color'];
  $sistemaoperativo=$_POST['sistemaoperativo'];
  $precio=$_POST['precio'];
  $moneda=$_POST['moneda'];
 $imagen= $_FILES['imagen']['name'];
$nombres= $_FILES['imagen']['tmp_name'];
$destino="tmpimages/".$imagen;
$cargado=move_uploaded_file($nombres,$destino);
if($cargado){
		echo "<img src='tmpimages/'".$imagen.">";
}
else{
	echo "La imagen no se ha podido subir.<br>";
}
	$modpro="UPDATE productos SET nombre='$nombre', marca='$marca', promocion='$promocion', capacidad='$capacidad', color='$color', sistemaoperativo='$sistemaoperativo', precio='$precio', moneda='$moneda', imagen='$imagen' where id='$id'";
$res=mysqli_query($conexion,$modpro);
echo "Modificado correctamente";

?>