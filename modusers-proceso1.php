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
  $apellidos=$_POST['apellidos'];
  $telefono=$_POST['telefono'];
  $correo=$_POST['correo'];
	$modi="UPDATE clientes SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', correo='$correo' where id='$id'";
$res=mysqli_query($conexion,$modi);
echo "Modificado correctamente";

?>