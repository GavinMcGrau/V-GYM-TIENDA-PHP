<?php
session_start();
include "connection.php";
$correo=$_SESSION['correo'];
$peso=$_POST['peso'];

$sqlChangeAvatar="UPDATE usuario SET peso='$peso' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>