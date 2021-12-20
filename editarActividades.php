<?php
  session_start();
  include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
  include "connection.php";
  
  
  
  $idActividad = $_POST['idActividad'];
  $nombreActividad=$_POST['nombreActividad'];
  $imagenActividad = $_POST['imagenActividad'];
  $descripcionActividad=$_POST['descripcionActividad'];
  $claseActividad =$_POST['claseActividad'];
  $subClaseActividad=$_POST['subClaseActividad'];
  
  if($imagenActividad != ""){
  
     
      $sqlChangeAvatar="UPDATE actividades SET nombre='$nombreActividad', foto='$imagenActividad',clase='$claseActividad',subclase='$subClaseActividad',descripcion='$descripcionActividad' where id= '$idActividad'";
      $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }else{
      $sqlChangeAvatar="UPDATE actividades SET nombre='$nombreActividad', clase='$claseActividad',subclase='$subClaseActividad',descripcion='$descripcionActividad' where id= '$idActividad'";
  $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }
  
  
  header('location:adminActividades.php');
  
  
  
  
  
  ?>


