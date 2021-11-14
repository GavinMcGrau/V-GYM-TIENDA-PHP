<?php 

session_start();
include "connection.php";
 include "plantillaHtml.php";

   ?>
<div class="container contenedorCentral">
  <div class="w dia">
    <h1><?php echo ucwords(strftime("%A"));  ?></h1>
  </div>
  <div class="container contenedorActividades">
    <div class="card-columns">
      
        
      
      
          <?php 
 $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario= '$correo'";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
         
          while ($knowActividad = mysqli_fetch_array($consultaImagenActividad)){
 ;
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
            ?> 
            <div class="card">
        <a href="#">

        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
      </div>
        </a>
          </div>
            <?php

          }
?>