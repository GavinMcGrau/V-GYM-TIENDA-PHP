<?php

session_start();
include "connection.php";


include "plantillaHtml.php";


?>
    <link rel="stylesheet" href="styles/stylesCards.css">
>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900" rel="stylesheet">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

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
            
      <!--   <a href="#"> -->

        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
            
          <h5 class="card-title "><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
          <div class="anyadir" ></div>
         
      </div>
        </a>
          </div>
          
<?php }?>