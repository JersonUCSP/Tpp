<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDatos="ventapc";
$con=mysqli_connect($servidor,$usuario,$clave,$baseDatos);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>