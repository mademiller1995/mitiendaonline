<html lang="es">
<head>
    <meta charset="utf-8">
    <title>TECHPHONE-Tienda Online de Telefonía</title>	
	  <link rel="stylesheet" href="http://code.jquery.com/jquery-latest.js">
    <link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="icon" href="img/ico/techphone.ico">
    <scrip src="js/main.js"></scrip>
	
</head>
<body>
    <h1>TECHPHONE</h1>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Móviles 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Iphone</a>
      <a href="#">Xiaomi</a>
      <a href="#">Samsung</a>
    </div>
  </div>
	<div class="dropdown">
    <button class="dropbtn">Tablets 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Ipad Air 2</a>
      <a href="#">Xiaomi Tab</a>
      <a href="#">Samsung Tab</a>
    </div>
  </div> 
	<a href="#news">Sugerencias</a>
  <div class="dropdown">
    <button class="dropbtn">Mi cuenta 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="registro.php">Registrarse</a>
  <a href="inicio.php">Iniciar Sesion</a>
    </div>
  </div> 
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
	<!--ofertas-->
<h2>Ofertas </h2>
	<?php
	include("conexion.php");
	$res3="SELECT * FROM productos where id=".$_GET['id'];
	$glopro2 =mysqli_query($conexion,$res3);
	while($fipro=mysqli_fetch_array($glopro2)){
	?>
	<form action="carritocompras.php" method="POST">
		<table>
		<center>
			<tr><td>Nombre: <?php echo $fipro['nombre'];?></td></tr>
			<tr><td>Capacidad: <?php echo $fipro['capacidad'];?></td></tr>
			<tr><td>Color: <?php echo $fipro['color'];?></td></tr>
			<tr><td>Descripción: <?php echo $fipro['descripcion'];?></td></tr>
			<tr><td>Precio: <?php echo $fipro['precio'];?></td></tr>
			<tr><td>Imagen: <img src="./tmpimages/<?php echo $fipro ['imagen'];?>"</td></tr>
		</center>
			</table>
		<td><a href="carritocompras.php" value="comprar" id="comprar">Comprar</a></td>
	</form>
	<?php
	}
	?>
	</body>
</html>
