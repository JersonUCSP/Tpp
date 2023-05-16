<?php
include 'conexion.php';
$fkb=$_REQUEST['fkbol'];
$fkp=$_REQUEST['fkpro'];
$cantidad=$_REQUEST['can'];
//$con=mysqli_connect("localhost","root","","ventapc")
//or die ("Problemas con la conexion a base de datos");
mysqli_query($con,"insert into detalleboleta (fkBoleta,fkProducto,cantidad) 
    values ($fkb,$fkp, $cantidad )")
    or die(mysqli_error($con));
mysqli_close($con);
echo 'El detalle de boleta ha sido registrada';
?>
