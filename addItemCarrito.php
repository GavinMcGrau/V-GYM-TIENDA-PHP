<?php
session_start();
include "connection.php";


$id = $_POST["id"];
$nombreProducto = $_POST["nombreProductos"];

$precioProducto=$_POST['precioProductos'];

$idUsuario=$_SESSION['correo'];
echo $idUsuario;
$sqlCountActividad="SELECT total as total FROM `carrito` WHERE idUsuario='".$idUsuario."' && id = (SELECT MAX(id) from carrito)";
$consulta=mysqli_query($con,$sqlCountActividad);
$contar= mysqli_fetch_array($consulta);
$total=$contar['total'] + $precioProducto;

echo $total;

$sqlCountActividad="SELECT COUNT(*) as contar FROM `carrito` WHERE `idUsuario`='".$idUsuario."'";
$consultaSQL=mysqli_query($con,$sqlCountActividad) ;

$contar= mysqli_fetch_array($consultaSQL);

if($contar['contar']<=1){
echo "sasdadsa";
$sqlAnyadirActividad="INSERT INTO `carrito`(`id`, `precio`, `nombre`, `total`, `idUsuario`) VALUES ('','".$precioProducto."','".$nombreProducto."','".$precioProducto."','".$idUsuario."')";
$consultas=mysqli_query($con,$sqlAnyadirActividad);
}else{
    
    $sqlAnyadirActividad="INSERT INTO `carrito`(`id`, `precio`, `nombre`, `total`, `idUsuario`) VALUES ('','".$precioProducto."','".$nombreProducto."','".$total."','".$idUsuario."')";
$consultas=mysqli_query($con,$sqlAnyadirActividad);
}

header('location:tienda.php');

?>