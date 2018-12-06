<?php
include("conexion.php");
session_start();
$adminis = $_SESSION['admin'];
if($adminis == null || $adminis = ''){
	echo "No eres administrador";
	die();
}
?>
<html lang="es">
<head>
<title>Tienda de Telefonía - Techphone</title>
	<link rel="icon" href="img/ico/techphone.ico">
	<link rel="stylesheet" href="css/estilos.css">
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
<div class="p-3 bg-info text-white">
	<header class="blog-header p-4 py-1">
	<div class="d-flex justify-content-around">
		<!--logo-->
		<div class=" col-6 d-flex justify-content-start">.
			<h1><a href="paneladmin.php">Techphone</a></h1>
          </div>
		
		<!--cuenta-->
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mi cuenta
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
	  <button class="dropdown-item" type="button">Bienvenida <?php
		echo $_SESSION['admin']?></button> 
    <button class="dropdown-item" type="button">Datos Personales</button>
	  <button class="dropdown-item" type="button"><a href="cerrarsession.php">Salir</a></button>
  </div>
</div>
	</div>
	</header>
	</div>
	<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="paneladmin.php">Panel Administrador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<!--Moviles-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gestor Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="addprod.php">Agregar</a>
          <a class="dropdown-item" href="modprod.php">Modificar</a>
			<a class="dropdown-item" href="gestorproduct.php">Listar y Eliminar</a>
        </li>
		  <!--tablets-->
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gestor Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="modusers.php">Modificar</a>
			<a class="dropdown-item" href="gestorusers.php">Listar y Eliminar</a>
        </li>
      <li class="nav-item">
		  <!--Tablets-->
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gestor Pedidos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="mlistapedidos.php">Listado de pedidos</a>
        </li>
		  <!--Consolas-->
		<a class="nav-link disabled" href="reclamaciones.php">Reclamaciones y Sugerencias</a>
      </li>
        </div>
    </ul>
  </div>
</nav>
	<!--header-->
	<div class="jumbotron text-center">
   <h2>Envíos gratis apartir de 150 €</h2>
  <p>¡Paga cuando lo recibas! Pago seguro!</p> 
</div>
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Contador de Productos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 <small class="text-muted"> / hasta ahora</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>¿ Quizá, puede faltar productos?</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver Productos</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pedidos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">15 <small class="text-muted">/ hasta ahora</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
               <li>¿ Quizá, puede faltar productos?</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Ver Listado Pedidos</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Reclamaciones y Sugerencias</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">29 <small class="text-muted">/ hasta ahora</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
           <li>¿ Quizá, puede faltar productos?</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Ver Reclamaciones de Usuarios!</button>
          </div>
        </div>
      </div>
<!--Informacion sobre el stio web // footer -->
  <!--FOOTER--><center>
	<footer class="pt-6 py-3  border-top">
        <div class="row">
          <div class="col-4 .col-lg-4">
            <img class="mb-2" src="img/ico/techphone.ico" alt="" width="150" height="150">
            <small class="d-block mb-3 text-muted">© Todos los derechos reservados  Techphone | 2018-2019</small>
          </div>
          <div class="col-4 .col-lg-4">
            <h5>Redes Sociales:</h5>
            <ul class="list-unstyled text-small">
				<li>Sguenos en: <a href="www.faceook.com">Facebook/Techphone.es</a>
      		<i class="fab fa-facebook-square"></i></li>
              <li>Siguenos en: <a href="www.twitter.com">Twitter/Techphone.es</a>
      		<i class="fab fa-twitter-square"></i></li>
              <li> Siguenos en Instagram: <a href="www.faceook.com">Instagram/Techphone.es</a>
      		<i class="fab fa-instagram"></i></li>
              <li>Siguenos en Google: <a href="www.faceook.com">Google/Techphone.es</a>
      		<i class="fab fa-facebook-square"></i></li>
			<li>Siguenos en Youtube: <a href="www.faceook.com">Tecphone/Youtube.es</a>
				<i class="fab fa-google"></i></li>
             </ul>
          </div>
			<div class="col-4 .col-lg-4">
            <h5>Sobre nosotros</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">¿Quiénes somos?</a></li>
              <li><a class="text-muted" href="#">Sugerencias</a></li>
              <li><a class="text-muted" href="#">¿No has recibido tu pedido? Envíanos un mensaje!</a></li>
              <li><a class="text-muted" href="#">Términos y condiciones legales</a></li>
             </ul>
          </div>
        </div>
      </footer>
	</center>
</body>
</html>