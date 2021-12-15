<?php
  session_start();
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
  include "connection.php";
  
  
  
  $idActividad = $_POST['idActividad'];
  $nombreActividad=$_POST['nombreActividad'];
  
  $descripcionActividad=$_POST['descripcionActividad'];
  $claseActividad =$_POST['claseActividad'];
  $subClaseActividad=$_POST['subClaseActividad'];
  
  if($_FILES['imagenActividad']['tmp_name']!= "" || $nombreActividad==""|| $descripcionActividad==""|| $claseActividad=""|| $subClaseActividad=""){
  
      $imagenActividad=file_get_contents($_FILES['imagenActividad']['tmp_name']);
      $fotoFinal='data:image/;base64,'.base64_encode($imagenActividad);
      $sqlChangeAvatar="UPDATE actividades SET nombre='$nombreActividad', foto='$fotoFinal',clase='$claseActividad',subclase='$subClaseActividad',descripcion='$descripcionActividad' where id= 3";
      $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }else{
      $sqlChangeAvatar="UPDATE actividades SET nombre='$nombreActividad', clase='$claseActividad',subclase='$subClaseActividad',descripcion='$descripcionActividad' where id= 3";
  $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }
  
  
  header('location:adminActividades.php');
    ?>