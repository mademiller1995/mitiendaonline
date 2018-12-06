<?php
session_start();
$usuario=$_SESSION['usuario'];
if($usuario == null || $usuario= ''){
	header("location:registro.php");
	die();
}
?>
<html lang="es">
<head>
<title>Tienda de Telefonía - Techphone</title>
	<link rel="icon" href="img/ico/techphone.ico">
	<meta charset="utf-8">
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/moe.css">
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
            <h1>Techphone</h1>
          </div>
		
		<!--cuenta-->
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mi cuenta
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Ver carrito</button>
    <button class="dropdown-item" type="button">Datos Personales</button>
    <button class="dropdown-item" type="button">Bienvenida <?php
		echo $_SESSION['usuario']?></button> 
    <button class="dropdown-item" type="button">Mis pedidos</button>
	  <button class="dropdown-item" type="button"><a href="cerrarsession.php">Salir</a></button>
  </div>
</div>
	</div>
	</header>
	</div>
	<!--navbar-->
	<div class="contain">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Promoción</a>
      </li>
		<!--Moviles-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Móviles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Samsung</a>
          <a class="dropdown-item" href="#">Xiaomi</a>
          <a class="dropdown-item" href="#">Apple</a>
          <a class="dropdown-item" href="#">Huawei</a>
        </li>
		  <!--tablets-->
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tablets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Samsung</a>
          <a class="dropdown-item" href="#">Xiaomi</a>
          <a class="dropdown-item" href="#">Apple</a>
          <a class="dropdown-item" href="#">Huawei</a>
        </li>
      <li class="nav-item">
		  <!--Tablets-->
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tablets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Samsung</a>
          <a class="dropdown-item" href="#">Xiaomi</a>
          <a class="dropdown-item" href="#">Apple</a>
          <a class="dropdown-item" href="#">Huawei</a>
        </li>
		  <!--Consolas-->
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Consolas Videojuegos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nintendo Switch</a>
          <a class="dropdown-item" href="#">Ps4</a>
          <a class="dropdown-item" href="#">Wii U</a>
          <a class="dropdown-item" href="#">Ps vita</a>
        </li>
        <a class="nav-link disabled" href="#">Reclamaciones y Sugerencias</a>
      </li>
        </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	</div>

	<!--header-->
	
	<div class="jumbotron text-center">
   <h2>Envíos gratis apartir de 150 €</h2>
  <p>¡Paga cuando lo recibas! Pago seguro!</p> 
</div>
	
	
	<center><h2>¿ Aún esperas por un nuevo Smartphone?</h2>
	</center> 
	<div class="container">
  <div class="row">
    <div class="col-sm">
              <div class="card mb-6 shadow-sm">
           <?php 
			include("conexion.php");
$sql="select * from productos where id=1";
	$resultado=mysqli_query($conexion,$sql);
while($listar=mysqli_fetch_array($resultado)){
	?>
                <img src="./tmpimages/<?php echo $listar ['imagen']; ?>" class="img-responsive" class="card-img-top" data-holder-rendered="true" style="width:538px"; >
				  <h2><?php echo $listar['nombre']?> <?php echo $listar['capacidad']?></h2>
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">New</small>
					  <?php
	}
?>	
                  </div>
                </div>
            
            </div>
    </div>
	  <div class="col-sm">
              <div class="card mb-6 shadow-sm">
           <?php 
			include("conexion.php");
$sql="select * from productos where id=1";
	$resultado=mysqli_query($conexion,$sql);
while($listar=mysqli_fetch_array($resultado)){
	?>
                <img src="./tmpimages/<?php echo $listar ['imagen']; ?>" class="img-responsive" class="card-img-top" data-holder-rendered="true" style="width:538px"; >
				  <h2><?php echo $listar['nombre']?> <?php echo $listar['capacidad']?></h2>
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">New</small>
					  <?php
	}
?>	
                  </div>
                </div>
            
            </div>
    </div>
	  <div class="col-sm">
              <div class="card mb-6 shadow-sm">
           <?php 
			include("conexion.php");
$sql="select * from productos where id=1";
	$resultado=mysqli_query($conexion,$sql);
while($listar=mysqli_fetch_array($resultado)){
	?>
                <img src="./tmpimages/<?php echo $listar ['imagen']; ?>" class="img-responsive" class="card-img-top" data-holder-rendered="true" style="width:538px"; >
				  <h2><?php echo $listar['nombre']?> <?php echo $listar['capacidad']?></h2>
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">New</small>
					  <?php
	}
?>	
                  </div>
                </div>
            
            </div>
    </div>
	  <div class="col-sm">
              <div class="card mb-6 shadow-sm">
           <?php 
			include("conexion.php");
$sql="select * from productos where id=1";
	$resultado=mysqli_query($conexion,$sql);
while($listar=mysqli_fetch_array($resultado)){
	?>
                <img src="./tmpimages/<?php echo $listar ['imagen']; ?>" class="img-responsive" class="card-img-top" data-holder-rendered="true" style="width:538px"; >
				  <h2><?php echo $listar['nombre']?> <?php echo $listar['capacidad']?></h2>
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver detalles</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">New</small>
					  <?php
	}
?>	
                  </div>
                </div>
            
            </div>
    </div>
		</div>
	</div>


<!--FOOTER-->
	<footer class="pt-6 py-3  border-top">
        <div class="row">
          <div class="col-3 .col-lg-3 bg-1">
            <img class="mb-2" src="img/ico/techphone.ico" alt="" width="150" height="150">
            <small class="d-block mb-3 text-muted">© Todos los derechos reservados  Techphone | 2018-2019</small>
          </div>
          <div class="col-3 .col-lg-3">
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
			<div class="col-3 .col-lg-3">
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
	</div>
</body>
</html>