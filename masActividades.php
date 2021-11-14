<?php

session_start();
include "connection.php";
include "plantillaHtml.php";



 $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
          $knowActividad = mysqli_fetch_array($consultaImagenActividad);
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
          while (($fila = mysqli_fetch_array($consultaImagenActividad))!=NULL){
    
            ?> 
            <div class="card">
        <a href="#">

        <img class="card-img-top" src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
      </div>
        </a>
          </div>
