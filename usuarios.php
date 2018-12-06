<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="css/registros.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>

<!--form-->
<form action="validarusuario.php" method="POST">
<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Iniciar Sesión</h1>
			</div>
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Nombre de usuario" id="login-name" name="usuario" REQUIRED>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="mail" class="login-field" value="" placeholder="micorreo@gmail.com" id="login-pass" name="correo" REQUIRED>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="contrasena" REQUIRED>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button type="submit" class="btn btn-outline-warning" name="ingresar">Iniciar Sesión</button>
				<br>
				<a class="btn btn-outline-danger" href="recuperarcontrasena.php" name="recuperar">Olvidaste tu contraseña?</a>
		</div>
	</div>
	</div>
	</form>
</body>
</html>