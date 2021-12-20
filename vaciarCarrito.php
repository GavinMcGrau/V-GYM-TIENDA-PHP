
<?php
session_start();
include "connection.php";




$idUsuario=$_SESSION['correo'];


$sqlCountActividad="DELETE FROM `carrito` WHERE idUsuario='".$idUsuario."'";
$consulta=mysqli_query($con,$sqlCountActividad);
header('location:tienda.php');

?>


