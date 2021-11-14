<?php 

$correo=$_SESSION['correo'];
$contrasenya= $_SESSION['contrasenya'];
include "connection.php";


/* $sql2 = "SELECT nombre,contrasenya from usuario where nombre='".$usr."' && contrasenya='".$contrasenya2."'";*/

$sql3 = "SELECT nombre as nombreUsuario from usuario where correo='$correo'";
$consultasUser=mysqli_query($con,$sql3);
$knowUser = mysqli_fetch_array($consultasUser);
$nombreUsuario = $knowUser['nombreUsuario'];

$sql4 = "SELECT imagen as imagens from usuario where correo='$correo'";
$consultasFoto=mysqli_query($con,$sql4);
$knowFoto = mysqli_fetch_array($consultasFoto);
$fotoUsuario = $knowFoto['imagens'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles/styles.css">
    <!--  <link rel="stylesheet" href="styles/styles.scss"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>


<body class="bodyUserPage">









    <div class=" d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark position-fixed" style="width: 250px;">
        <a href="/" class="d-flex align-items-center mb-5 mb-md-5 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="100"> </svg>
            <h2 class="fs-4 ">BreakEnds</h2>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="login.php" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Inicio</span> </a>
            </li>
            <li>
                <a href="masActividades.php" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Ejercicios</span> </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">My Orders</span> </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Settings</span> </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Bookmarks</span> </a>
            </li>
        </ul>
        <h3 class="d-flex align-items-center text-white text-decoration-none nombre" aria-expanded="false">
            <?php echo $nombreUsuario; ?>
        </h3>

        <hr>

        <div class=" text-center img-fluid"> <img src="<?php echo $fotoUsuario; ?>" alt="" width="160" height="150" class="rounded-circle  fotoUser">
        </div>
    </div>