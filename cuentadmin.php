<?php
include("conexion.php");
session_start();
$adminis = $_SESSION['admin'];
$conexion=mysqli_connect('localhost','root','','tienda');
if($adminis == null || $adminis = ''){
	echo "No eres administrador";
	die();
}
?>
<html>
<head>
<title>Panel de Administrador - TECHPHONE</title>
	<link rel="icon" href="img/ico/techphone.ico">
	<meta charset="utf-8">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--fin-->
</head>
	<body>
		<!--Menú de navegación-->
		<center>
		<h3>TECHPHONE</h3>
			</center>
	<div class="p-3 mb-2 bg-success text-white">
			<h6>Bienvenido Administrador: <?php
		echo $_SESSION['admin']?></h6>
	</div>
		<!--Menú de navegación-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="#">Panel Administrador</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gestorproduct.php">Gestor Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Gestor Usuarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Gestor Pedidos</a>
  </li>
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mi cuenta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="cuentadmin.php">Datos Personales</a>
          <a class="dropdown-item" href="cerrarsession.php">Cerrar Sesión</a>
         </div>
      </li>
	  </ul>
	</div>
	</nav>
<div class="container">
	<div class="col-xl-12">
<nav>
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

</nav>
	</div>
	  </div>
	</nav>

	
	</center>
	<!--fin de menu de navegación-->
<div class="container">
		<div class="col-xl-10">
			<center>
<h1>Lista de usuarios</h1>
<table class="table table-striped">
	 <tr> 
		 <td>Id</td>
        <td>Nombre</td> 
	      <td>Contraseña</td> 
		 <td>Acción</td>
      </tr> 
	<?php 
	
$sql="select * from administrador";
	$resultado=mysqli_query($conexion,$sql);
while($listar=mysqli_fetch_array($resultado)){
	?>
		<tr>
	<td><?php echo $listar['idadministrador']?></td>
	<td><?php echo $listar['nombre']?></td>
	<td><?php echo $listar['contrasena']?></td>
	 <li class="nav-item">
    </li><td><a href="eliminar.php?id=<?php echo $listar['id'];?>">Eliminar</a></td></
	</tr>
<?php	
}
?>
</table>
	</div>
	</div>
		</div>
	</body>
</html>