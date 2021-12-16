<?php  
session_start();
include "connection.php";
setlocale(LC_TIME,"spanish");

 
$id=$_POST['id'];




 $sqlCheck="DELETE FROM actividades  WHERE id = '$id'";
 $consultas=mysqli_query($con,$sqlCheck);

 
header('location:adminActividades.php');
?>