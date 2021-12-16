<?php

session_start();
include "plantillaHtmlAdmin.php";
include "connection.php";
if($correo == null || $rolUsuario != "admin"){
    header("Location: paginaUsuario.php");
  }




$idActividad = $_POST['idActividad'];
$nombreActividad=$_POST['nombreActividad'];
$imagenActividad = $_POST['imagenActividad'];
$descripcionActividad=$_POST['descripcionActividad'];
$claseActividad =$_POST['claseActividad'];
$subClaseActividad=$_POST['subClaseActividad'];

  
  
    $sqlChangeAvatar="INSERT INTO actividades (`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`, `repeticiones`, `dia`) VALUES ('[value-1]','$nombreActividad','$imagenActividad','$claseActividad','$subClaseActividad','$descripcionActividad','[value-7]','1','[value-9]','[value-10]','[value-11]')";
    $sqlquery=mysqli_query($con,$sqlChangeAvatar);


    header('location:adminActividades.php');
  



?>