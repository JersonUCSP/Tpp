<?php
include 'conexion.php';
$marca=$_REQUEST['marca'];
mysqli_query($con,"insert into marca (nombre) values ('$marca')") or die(mysqli_error($con));
mysqli_close($con);
echo 'Nueva marca registrada';
?>

