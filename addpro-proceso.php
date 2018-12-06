
<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$promocion=$_POST['promocion'];
$capacidad=$_POST['capacidad'];
$color=$_POST['color'];
$sistemaoperativo=$_POST['sistemaoperativo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$moneda=$_POST['moneda'];
$imagen= $_FILES['imagen']['name'];
$nombres= $_FILES['imagen']['tmp_name'];
$destino="tmpimages/".$imagen;
$cargado=move_uploaded_file($nombres,$destino);
if($cargado){
		echo "<img src='tmpimages/'".$imagen.">";
}
else{
	echo "La imagen no se ha podido subir";
}

$insertar2="INSERT INTO productos(nombre,marca,promocion,capacidad,color,sistemaoperativo,descripcion,precio, moneda,imagen) values('$nombre','$marca','$promocion','$capacidad','$color','$sistemaoperativo','$descripcion','$precio','$moneda','$imagen')";
$result4=mysqli_query($conexion,$insertar2);
if(!$result4){
	echo 'Lo sentimos, No se ha podido cargar los datos';
}
else{
	echo "<script>alert(Añadido Correctamente!)</script>";
	header("location:gestorproduct.php");
}
/*cerrar bbdd cnexion*/
mysqli_close($conexion);

?>