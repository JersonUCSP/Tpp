<?php
include 'conexion.php';
$n=$_REQUEST['nom'];
//$con=mysqli_connect("localhost","root","","ventapc")
//or die ("Problemas con la conexion a base de datos");
mysqli_query($con,"insert into cliente (nombre,apellido,dni,celular) 
    values ('$n','$_REQUEST[ape]', $_REQUEST[dni] , $_REQUEST[cel])")
    or die(mysqli_error($con));
mysqli_close($con);
echo 'El nuevo cliente se almacenó';
?>

