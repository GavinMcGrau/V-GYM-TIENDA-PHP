<?php 

session_start();
include "connection.php";
 include "plantillaHtml.php";
 setlocale(LC_TIME,"spanish");
$dia=strftime("%A");
   ?>
<div class="container contenedorCentral">
  <div class="w dia">
    
    <h1 class="dias" ><?php echo ucwords(strftime("%A"));  ?></h1>
  </div>
  <div class="container contenedorActividades">
    <div class="card-columns">
      <?php 
    $sqlVacio= "SELECT idUsuario as usuario from actividades where idUsuario= '$correo' && dia= '$dia'";
    $consultaVacio = mysqli_query($con,$sqlVacio);
     if(($knowVacio = mysqli_fetch_array($consultaVacio))==NULL ){?>
      <h2>Aun no tienes ejercicios</h2>
     <div class="btn btn-primary"  ><a style="color:white;"href="masActividades.php">Empecemos!</a> </div>
      <?php
         }else{ 
 $sqlImagenActividad="SELECT id as idActividad,hecha as si,foto as imagenActividad,clase as claseActividad,cantidad as cantidadA,repeticiones as repeticionesA,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario= '$correo' && dia='$dia'";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
         
          while ($knowActividad = mysqli_fetch_array($consultaImagenActividad)){
 ;
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
          $series =$knowActividad["cantidadA"];
          $repeticiones =$knowActividad["repeticionesA"];
          $id=$knowActividad["idActividad"];
          $hecha=$knowActividad["si"];
            ?> 

            <div class="formAnyadir"></div>
            <div class="card">
            
            <div>
               <form method='post' action="dropItem.php" >
            <button class="drop" type="submit" value="Submit"></button>
                  <select name='id' style="display:none" > <option value="<?php echo $id ?>"></option></select>

            </form>

            <form method='post'  action="checkSend.php">
     
      <select name='id' style="display:none" > <option value="<?php echo $correo ?>"></option></select>

      </form>
      <select name='id' style="display:none" > <option value="<?php echo $id ?>"></option></select>
        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap"></div>
     
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
          
          <h5 class="repeticiones">  &nbsp Series: <?php echo $series ?> &nbsp &nbsp &nbsp &nbsp &nbsp Repeticiones: <?php echo $repeticiones ?> </h5>
          
      </div>

     
          </div>
            <?php

          }
          
        }
?>
