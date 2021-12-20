<?php
session_start();
include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
include "connection.php";



$series = $_POST["series"];
$repeticiones = $_POST["repeticiones"];
$dia = $_POST["dia"];
$nombreActividad=$_POST['nombreActividad'];
$imagenActividad=$_POST['imagenActividad'];
$descripcionActividad=$_POST['descripcionActividad'];
$claseActividad =$_POST['claseActividad'];
$subClaseActividad=$_POST['subClaseActividad'];

$sqlAnyadirActividad="INSERT INTO actividades(`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`,`repeticiones`, `dia`) VALUES ('','".$nombreActividad."','".$imagenActividad."','".$claseActividad."','".$subClaseActividad."','".$descripcionActividad."','no','".$_SESSION['correo']."','".$series."','".$repeticiones."','".$dia."')";
$consultas=mysqli_query($con,$sqlAnyadirActividad);

header('location:masActividades.php');


?>