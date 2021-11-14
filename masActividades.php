<?php

session_start();
include "connection.php";


include "plantillaHtml.php";

?>
    <div class="boton" style="margin-left: 27vw;">Todo</div>
     <div class="boton" style="margin-left: 45vw;">Tren Superior</div>
      <div class="boton" style="margin-left: 63vw;">Tren Inferior</div>
       

 <div class="container contenedorCentral">
  
            <div class="container contenedorActividades">
    <div class="card-columns ">
        <?php
 $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario=1";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowActividad = mysqli_fetch_array($consultaImagenActividad))!=NULL){
        
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
            ?> 

           
            <div class="card actividadPrincipal">
               
        <a href="#">

        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
         
          <h5 class="card-title "><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
      </div>
        </a>
          </div>
          
<?php }?>