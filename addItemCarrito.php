<?php
session_start();
include "connection.php";



$id = $_POST["id"];
$nombreProducto = $_POST["nombreProductos"];
$dia = $_POST["dia"];
$precioProducto=$_POST['precioProductos'];

$idUsuario=$_SESSION['correo'];

$sqlCountActividad="SELECT COUNT(*) as contar FROM `carrito` WHERE idUsuario=".$idUsuario.";"
$consulta=mysqli_query($con,$sqlCountActividad);



$sqlAnyadirActividad="INSERT INTO `carrito`(`id`, `precio`, `nombre`, `total`, `idUsuario`) VALUES ('','[value-2]','[value-3]','[value-4]','".$idUsuario."')";
$consultas=mysqli_query($con,$sqlAnyadirActividad);

header('location:tienda.php');


?>