<html>
<head>
<meta charset="utf-8">
 <meta charset="utf-8">
	<title>Registrarme - Techphone</title>
	
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/registros.css">
</head>
<body>
<!--formulario registro-->
		<form action="rusuarios.php" method="POST">
<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Registrarme</h1>
			</div>
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Pedro" id="login-name" name="usuario">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Lopez Obrero" id="login-name" name="apellidos">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="number" class="login-field" value="" placeholder="640225500" id="login-name" name="telefono">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
				<input type="email" class="login-field" value="" placeholder="algo@hotmail.com" id="login-pass" name="email">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="******" id="login-pass" name="contrasena">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button type="submit" class="btn btn-outline-warning" name="creacuenta">Registrarme!</button>
				<br>
				<a class="btn btn-outline-danger" href="usuarios.php">Tengo una cuenta!</a>
		</div>
	</div>
	</div>
	</form>
</body>
</body>
</html>