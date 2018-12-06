<?php
/*comprobar que el usuario existe*/
if(!isset($_POST['recuperar'])){
/*enviar correo al usuario con su contraseña*/
$tcorreo="kimberly.tacunan@gmail.com";
$nombre=$_POST['usuario'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
/*Datos que ese envia al usuario*/ 
$contenido= "Nombre: " . $nombre . "\correo: " . $correo . "n\Contraseña: " . $contrasena ;
/*correo al usuario*/
mail($tcorreo,"Recuperación de su contraseña", $contenido);
header("location:index.php");
}
?>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Recuperar contraseña - Techphone</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/registros.css">
	</head>
	<body>

<!--form-->
<form action="recordarcontrasena.php" method="POST">
<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Recuperar contraseña</h1>
			</div>
			<div class="login-form">
				<div class="control-group">
				<input type="mail" class="login-field" value="" placeholder="micorreo@gmail.com" id="login-pass" name="correo">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button type="submit" class="btn btn-outline-warning" name="validar">Validar</button>
				<br>
		</div>
	</div>
	</div>
	</form>
		
</body>
</html>