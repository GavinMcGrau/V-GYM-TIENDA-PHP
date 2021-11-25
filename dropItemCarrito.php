<?php
session_start();
include "connection.php";


$id = $_POST["idCarrito"];
$correo = $_SESSION['correo'];
$precioProducto = $_POST["precioProducto"];
$total = $_SESSION['totalCarrito'] - $precioProducto;


$sqlAnyadirActividad="UPDATE `carrito` SET `total`='$total' WHERE `idUsuario`='$idUsuario'";
 $consultas=mysqli_query($con,$sqlAnyadirActividad);

$sqlDeleteCarrito="UPDATE `carrito` SET `total`='$total' WHERE idUsuario = $correo";
$consultaCarrito=mysqli_query($con,$sqlDeleteCarrito);


$sqlDeleteCarrito="DELETE FROM carrito  WHERE id = '$id'";
$consultaCarrito=mysqli_query($con,$sqlDeleteCarrito);

 

header('location:tienda.php');

?>
