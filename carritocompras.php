<?php
session_start();
include("conexion.php");
if(isset($_POST['agregar']))
{
    if(isset($_SESSION['add_carro']))
    {
        $item_array_id_cart = array_column($_SESSION['add_carro'],'item_id');
        if(!in_array($_GET['id'],$item_array_id_cart))
        {

            $count= count($_SESSION['add_carro']);
            $item_array = array(
                'item_id'        => $_GET['id'],
                'item_nombre'    => $_POST['hidden_nombre'],
                'item_precio'    => $_POST['hidden_precio'],
                'item_cantidad'  => $_POST['cantidad'],
            );

            $_SESSION['add_carro'][$count]=$item_array;
        }
        else
            {
              echo '<script>alert("El Producto ya existe!!");</script>';
            }
    }
    else
        {
            $item_array = array(
                'item_id'        => $_GET['id'],
                'item_nombre'    => $_POST['hidden_nombre'],
                'item_precio'    => $_POST['hidden_precio'],
                'item_cantidad'  => $_POST['cantidad'],
            );

            $_SESSION['add_carro'][0] = $item_array;
        }
}
if(isset($_GET['action']))
{
    if($_GET['action']=='delete')
    {
        foreach ($_SESSION['add_carro'] AS $key => $value)
        {
            if($value['item_id'] == $_GET['id'])
            {
                unset($_SESSION['add_carro'][$key]);
                echo '<script>alert("El Producto Fue Eliminado!");</script>';
                header("location:index.php");
            }

        }

    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/carrs.css">
    <title>Carrito</title>
</head>
<body>

<div class="container">
    <h3 align="center">Tutorial <a href="javascript:void();">Sencillo PHP Mysql Carrito de Compra</a></h3>
    <?php
$sql="SELECT * FROM productos";
$resul= mysqli_query($conexion,$sql);
if(mysqli_num_rows($resul) > 0){
    while ($row=mysqli_fetch_array($resul)){
?>
    <div class="col-md-3">
        <form method="post" action="index.php?action=add&id=<?php echo $row['id']; ?>">
            <?php

            ?>
            <div class="carro" align="center">
                <img src="tmpimages/<?php echo $row['img'];?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row['nombre'];?></h4>
                <h4 class="text-danger">$<?php echo $row['precio'];?></h4>
                <input type="text" name="cantidad" class="form-control" value="1" />
                <input type="hidden" name="hidden_nombre" value="<?php echo $row['nombre'];?>" />
                <input type="hidden" name="hidden_precio" value="<?php echo $row['precio'];?>" />
                <input type="submit" name="agregar" style="margin-top:5px;" class="btn btn-success" value="Add" />
            </div>
        </form>
    </div>
        <?php
    }
}
    ?>
    <div style="clear:both"></div>
    <br />
    <h3>Detalle de la Orden</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Nombre</th>
                <th width="10%">Cantidad</th>
                <th width="20%">Precio</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
            if(!empty($_SESSION["add_carro"])){
                $total = 0;
                foreach($_SESSION["add_carro"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["item_nombre"]; ?></td>
                        <td><?php echo $values["item_precio"]; ?></td>
                        <td>$ <?php echo $values["item_cantidad"]; ?></td>
                        <td>$ <?php echo number_format($values["item_cantidad"] * $values["item_precio"], 2);?></td>
                        <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_cantidad"] * $values["item_precio"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
            }else{
                ?>
                <tr>
                    <td colspan="4" style="color: red" align="center"><strong>No hay Producto Agregado!</strong></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>