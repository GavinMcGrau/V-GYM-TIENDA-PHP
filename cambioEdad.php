<?php
session_start();
include "connection.php";
$correo=$_SESSION['correo'];
$edad=$_POST['edad'];

$sqlChangeAvatar="UPDATE usuario SET edad='$edad' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>