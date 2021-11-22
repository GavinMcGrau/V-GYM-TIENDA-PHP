<?php
session_start();
include "connection.php";
$correo=$_SESSION['correo'];
$altura=$_POST['altura'];

$sqlChangeAvatar="UPDATE usuario SET altura='$altura' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>