<?php  
session_start();
include "plantillaHtmlAdmin.php";
  if($correo == null ){
      header("Location: paginaUsuario.php");
    }
include "connection.php";
setlocale(LC_TIME,"spanish");

 
$id=$_POST['id'];
$dia =strftime("%A");



 $sqlCheck="DELETE FROM actividades  WHERE id = '$id' && dia='$dia'";
 $consultas=mysqli_query($con,$sqlCheck);

 
header('location:paginaUsuario.php');
?>