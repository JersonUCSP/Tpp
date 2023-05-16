<?php
include 'conexion.php';
$nombre=$_REQUEST['nom'];
$descripcion=$_REQUEST['des'];
$pre=$_REQUEST['precio'];
$sto=$_REQUEST['stock'];
$fkmar=$_REQUEST['fkmarca'];
$fkcat=$_REQUEST['fkcategoria'];
//$con=mysqli_connect("localhost","root","","ventapc")
//or die ("Problemas con la conexion a base de datos");
mysqli_query($con,"insert into producto (nombre,descripcion,precio,stock,fkMarca,fkCategoria) 
    values ('$nombre','$descripcion', $pre, $sto, $fkMarca, $fkcat )")
    or die(mysqli_error($con));
mysqli_close($con);
echo 'NUEVO PRODUCTO REGISTRADO ';
?>
