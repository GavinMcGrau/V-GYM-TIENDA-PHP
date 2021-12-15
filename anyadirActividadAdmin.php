<?php

session_start();
include "plantillaHtmlAdmin.php";
include "connection.php";
if($correo == null || $rolUsuario != "admin"){
    header("Location: paginaUsuario.php");
  }




$idActividad = $_POST['idActividad'];
$nombreActividad=$_POST['nombreActividad'];

$descripcionActividad=$_POST['descripcionActividad'];
$claseActividad =$_POST['claseActividad'];
$subClaseActividad=$_POST['subClaseActividad'];
  /* 
if($_FILES['imagenActividad']['tmp_name']!= ""){ */
  
    $imagenActividad=file_get_contents($_FILES['imagenActividad']['tmp_name']);
    $fotoFinal='data:image/;base64,'.base64_encode($imagenActividad);
    $sqlChangeAvatar="INSERT INTO actividades (`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`, `repeticiones`, `dia`) VALUES ('[value-1]','$nombreActividad','$fotoFinal','$claseActividad','$subClaseActividad','$descripcionActividad','[value-7]','1','[value-9]','[value-10]','[value-11]')";
    $sqlquery=mysqli_query($con,$sqlChangeAvatar);
/* }else{
    header('location:adminActividadesss.php');
    $sqlChangeAvatar="INSERT INTO actividades (`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`, `repeticiones`, `dia`) VALUES ('[value-1]','$nombreActividad','$fotoFinal','$claseActividad','$subClaseActividad','$descripcionActividad','[value-7]','1','[value-9]','[value-10]','[value-11]')";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);
} */


/* header('location:adminActividades.php'); */





?>