<!DOCTYPE html>
<html lang="es">
    

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-BE-Logo-Design-by-Greenlines-Studios.jpg">



    <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles/styles.css">
    <!--  <link rel="stylesheet" href="styles/styles.scss"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<?php 
include "connection.php";
setlocale(LC_TIME,"es_ES.UTF-8s");


$correo=$_SESSION['correo'];
$contrasenya= $_SESSION['contrasenya'];



$sql3 = "SELECT nombre as nombreUsuario,rol as rolUsuario,imagen as imagens from usuario where correo='$correo'";
$consultasUser=mysqli_query($con,$sql3);
$knowUser = mysqli_fetch_array($consultasUser);
$nombreUsuario = $knowUser['nombreUsuario'];
$rolUsuario = $knowUser['rolUsuario'];
$fotoUsuario = $knowUser['imagens'];
$_SESSION['rol']=$rolUsuario;


?>
<body class="bodyUserPage ">

    <div class=" barraPlantilla d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark position-fixed" style="width: 250px;">
        <a href="paginaAdmin.php" class=" d-flex align-items-center mb-5 mb-md-5 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="100"> </svg>
            <h2 class="fs-4 ">BreakEnds</h2>
           
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="adminUsuario.php" class="nav-link text-white" aria-current="page"> <span class="ms-2">Usuarios</span> </a>
            </li>
            <li> 
                <a href="adminActividades.php" class="nav-link text-white"> <span class="ms-2">Ejercicios</span> </a>
            </li>
            <li> 
                <a href="adminProductos.php" class="nav-link text-white"> <span class="ms-2">Productos</span> </a>
            </li>
            <li> 
                <a href="paginaUsuario.php" class="nav-link text-white"> <span class="ms-2">Modo Usuario</span> </a>
            </li>
           
            <br><br>
             <li>
                <a href="logout.php" class="nav-link text-white"> <span class="ms-2">Salir</span> </a>
            </li>
           
        </ul>
        <h3 class="d-flex align-items-center text-white text-decoration-none nombre" aria-expanded="false">
            <?php echo $nombreUsuario; ?>
        </h3>
        <hr>
        </div>
    </div>
        </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
   <script src="./table.js"></script>
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <?php ?>