<?php
session_start();
include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
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
