<?php
session_start();
include "connection.php";
$correo=$_SESSION['correo'];
$nombre=$_POST['nombre'];

$sqlChangeAvatar="UPDATE usuario SET nombre='$nombre' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>