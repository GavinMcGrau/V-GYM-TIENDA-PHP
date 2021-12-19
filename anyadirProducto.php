<?php
session_start();
include "connection.php";



$nombreProducto= $_POST["nombreProducto"];
$precioProducto = $_POST["precioProducto"];
$imagenProducto = $_POST["imagenProducto"];



$sqlAnyadirActividad="INSERT INTO productos(`id`,`nombre`, `precio`, `imagen`) VALUES ('','".$nombreProducto."','".$precioProducto."','".$imagenProducto."')";
$consultas=mysqli_query($con,$sqlAnyadirActividad);

header('location:adminProductos.php');


?>