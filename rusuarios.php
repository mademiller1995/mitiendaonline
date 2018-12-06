<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$apellido=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$contrasena=$_POST['contrasena'];
if(isset($_POST['creacuenta'])){
	/*Comprobar que que los campos no están vacios*/
	if(empty($usuario)){
    	echo "<p class='error'>Introduce un nombre de usuario</p>";
		if(strlen($usuario)>20){
			echo "<p class='error'>El nombre que has elegido es muy largo</p>";
		}
	}
	if(empty($apellido)){
		echo "<p class='error'>Falta un apellido!</p>";
		echo "<p class='error'>Falta un apellido!</p>";
		echo "<p class='error'>Falta un apellido!</p>";
		if(strlen($apellido)>50){
			echo "<p class='error'>El apellido es muy largo</p>";	
		}
	}
	if(empty($telefono)){
		echo "<p class='error'>Introduce un número de móvil</p>";
		}
		if(!is_numeric($telefono)){
			echo "<p class='error'>Debe ser un número</p>";
		}
		
	if(empty($correo)){
		echo "<p class='error'>Debes insertar un correo</p>";
	}  
	   else{
		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			echo "<p class='error'>El correo es inválido!</p>";
		}
	}
	if(empty($contrasena)){
		echo "<p class='error'>Introduce un contraseña!</p>";
	}
}

/* si no están vacios*/
	else{
		$sql31="SELECT * from clientes where nombre='$usuario'"; /*buscar en tb usuarios un referente*/
		$res31=mysqli_query($conexion,$sql31);
		$filasuser=mysqli_num_rows($res31);
		if($filasuser>0){
			/*comprueba si hay datos*/
		echo "Ya existes en nuestra Base de datos";
		header("location:registro.php");
		}
		else{
			$insertar="INSERT INTO clientes(nombre,apellidos,telefono,correo,contrasena) values('$usuario','$apellido','$telefono','$correo','$contrasena')";
				$result2=mysqli_query($conexion,$insertar);
				if(!$result2){
				echo 'No se ha podido registrar este usuario';
				}
				else{
					header("location:usuarios.php");
				}
		}
	}
/*cerrar bbdd cnexion*/
mysqli_close($conexion);

?>
