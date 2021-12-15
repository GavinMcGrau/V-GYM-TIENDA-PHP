<?php
session_start();
include "connection.php";
 include "plantillaHtml.php";
if($correo == null){
  header("Location: prueba.php");
}




$correo = $_SESSION['correo'];

$sqlCountCarrito="SELECT COUNT(*) as contar,id as id FROM `chattraining` WHERE `idUsuario`='".$_SESSION['correo']."'";
$consultaSQLcarrito=mysqli_query($con,$sqlCountCarrito) ;

$contar= mysqli_fetch_array($consultaSQLcarrito);
 

if($contar['contar']>=1){

    $sqlTotal = "SELECT mensaje as mensaje FROM `chattraining` WHERE idUsuario='".$_SESSION['correo']."' && id = (SELECT MAX(id) from carrito)";
$consultTotal=mysqli_query($con,$sqlTotal) ;

    ?>
            <?php    
          while ($sumaTotal= mysqli_fetch_array($consultTotal)){
              
                    $totalProductos = $sumaTotal["mensaje"];

                ?>   <h1 style="left:50%; position:absolute;" > <?php  echo $totalProductos ?>  </h1>   <?php
          }


        }




 ?>

 <h1 style="margin-left:70%; position:absolute;" > <?php $_SESSION['correo'] ?> </h1>