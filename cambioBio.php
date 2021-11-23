<?php
session_start();
include "connection.php";
$correo=$_SESSION['correo'];
$altura=$_POST['altura'];
$peso=$_POST['peso'];
$edad=$_POST['edad'];
$nombre=$_POST['nombre'];

$sqlChangeAvatar="UPDATE usuario SET altura='$altura', peso='$peso', edad='$edad', nombre='$nombre' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>