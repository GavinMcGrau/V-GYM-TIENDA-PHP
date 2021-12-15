<?php
session_start();
include "connection.php";
include "plantillaHtmlAdmin.php";
if($correo == null){
  header("Location: prueba.php");
}


$sqlCount="SELECT COUNT(nombre) as contarUsers from usuario;";
$consultas=mysqli_query($con,$sqlCount);
$array = mysqli_fetch_array($consultas);

$usuarios = $array['contarUsers'];
?>




<h1 class="contaUsers"> Hay Un total de <?php echo $usuarios; ?> usuarios.</h1>
<a class="vacaciones" href="#"> Solicitar Vacaciones!</a>