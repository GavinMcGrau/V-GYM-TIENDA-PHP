<?php
session_start();
include "plantillaHtmlAdmin.php";
  if($correo == null ){
      header("Location: paginaUsuario.php");
    }
include "connection.php";
$correo=$_SESSION['correo'];
$nombre=$_POST['nombre'];

$sqlChangeAvatar="UPDATE usuario SET nombre='$nombre' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);

header('location: configUsuario.php');

?>