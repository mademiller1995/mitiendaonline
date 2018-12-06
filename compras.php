<?php
include("conexion.php");
session_start();
$arreglo=$_SESSION['carrito'];
$nventas=0;
$query7="SELECT * FROM compras order by nventas DESC limit 1";
$consulta7=mysql_query($conexion,$query7);
while($carrito=mysql_fetch_array($consulta7)){
	$nventas=$carrito['nventas'];
}
if($nventas==0){
	$nventas=1;
}
else{
	$nventas=$nventas+1;
}
/*Insertar compra cuando el usuario lo realice.*/
for($i=0;$i<count($arreglo);$i++){
	mysql_query("INSERT INTO compras(nventas,nombre,imagen,precio,cantidad,subtotal) VALUES(
	".$nventas.",
	'".$arreglo[$i]['imagen']."',
	'".$arreglo[$i]['nombre']."',
	'".$arreglo[$i]['precio']."',
	'".$arreglo[$i]['cantidad']."',
	'".$arreglo[$i]['precio']*$arreglo[$i]['cantidad'])."'
	)"or die(mysql_error());
}
unset($_SESSION['carrito']);
?>