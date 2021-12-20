<?php  
session_start();
include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
include "connection.php";
setlocale(LC_TIME,"spanish");

 
$id=$_POST['idProducto'];




 $sqlCheck="DELETE FROM productos  WHERE id = '$id'";
 $consultas=mysqli_query($con,$sqlCheck);

 
header('location:adminProductos.php');
?>