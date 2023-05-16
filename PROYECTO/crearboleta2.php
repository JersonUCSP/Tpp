<?php
include 'conexion.php';
$n=$_REQUEST['fkcliente'];
$f=$_REQUEST['fec'];
$t=$_REQUEST['tot'];
//$con=mysqli_connect("localhost","root","","ventapc")
//or die ("Problemas con la conexion a base de datos");
mysqli_query($con,"insert into boleta (fkCliente,fecha,total) 
    values ($n,'$f', $t )")
    or die(mysqli_error($con));
mysqli_close($con);
echo 'La boleta ha sido registrada';
?>
