<?php
  session_start();
  include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
  include "connection.php";
  
  
  
  $nombreProducto = $_POST['nombreProducto'];
  $precioProducto=$_POST['precioProducto'];
  $imagenProducto = $_POST['imagenProducto'];
  $idProducto = $_POST['idProducto'];
 
    
     
      $sqlChangeAvatar="UPDATE productos SET nombre='$nombreProducto', precio='$precioProducto',imagen='$imagenProducto' where id= '$idProducto'";
      $sqlquery=mysqli_query($con,$sqlChangeAvatar);
 
  
  
  header('location:adminProductos.php');
  
  
  
  
  
  ?>


