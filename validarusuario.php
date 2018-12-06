<?php
session_start();
include("conexion.php");
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$_SESSION['usuario']=$usuario;

if(isset($_POST['ingresar'])){
	/*Comprobar que que los campos no están vacios*/
	if(empty($usuario) || empty($contrasena) || empty($correo)){
    echo "<script>alert('Los campos no pueden estar vacios')</script>";
	}
	else{
		$sql="SELECT nombre,contrasena,correo from clientes where nombre='$usuario' and contrasena='$contrasena' and correo='$correo'";
		$result1=mysqli_query($conexion,$sql);
		$filas=mysqli_num_rows($result1);
			if($filas>0){
				header("location:index.php");
			}
			else{
				echo "<script>alert('No existe ningún usuario con estos datos')</script>";
			}
		
	}
	
	
}

mysqli_close($conexion);
?>