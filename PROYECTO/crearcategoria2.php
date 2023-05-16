<?php
include 'conexion.php';
$cat=$_REQUEST['cat'];
mysqli_query($con,"insert into categoria (nombre) values ('$cat')") or die(mysqli_error($con));
mysqli_close($con);
echo 'Nueva categoria registrada';
?>

