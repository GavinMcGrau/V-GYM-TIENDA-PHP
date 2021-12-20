<?php
session_start();
include "connection.php";
 include "plantillaHtml.php";
if($correo == null){
  header("Location: prueba.php");
}

?>


<!DOCTYPE html>
<html lang="es">
    

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles/styles.css">
    <!--  <link rel="stylesheet" href="styles/styles.scss"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<?php 



 setlocale(LC_TIME,'es-ES');
 $dia=strftime("%A");
 if(strftime("%u")==3){
   $dia="Miércoles";
 }elseif(strftime("%u")==6){
   $dia="Sábado";
 }




   ?>
<div class="container contenedorCentral">
  <div class="w dia">
    
    <h1 class="dias" ><?php echo ucwords($dia); ?></h1>
  </div>
  <div class="container contenedorActividades">
    <div class="card-columns">
      <?php 
    $sqlVacio= "SELECT idUsuario as usuario from actividades where idUsuario= '$correo' && dia= '$dia'";
    $consultaVacio = mysqli_query($con,$sqlVacio);
     if(($knowVacio = mysqli_fetch_array($consultaVacio))==NULL ){?>
      <div class="sinActividades">
      <h2>Aun no tienes ejerciciòs</h2>
     <div class="btn btn-primary"  ><a style="color:white;"href="masActividades.php">Empecemos!</a> </div>
     </div>
      <?php
         }else{ 
 $sqlImagenActividad="SELECT id as idActividad,hecha as si,foto as imagenActividad,clase as claseActividad,cantidad as cantidadA,repeticiones as repeticionesA,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario= '$correo' && dia='$dia'";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
         
          while ($knowActividad = mysqli_fetch_array($consultaImagenActividad)){
 
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
          $series =$knowActividad["cantidadA"];
          $repeticiones =$knowActividad["repeticionesA"];
          $id=$knowActividad["idActividad"];
          $hecha=$knowActividad["si"];

        
            ?> 

           
            <div class="card">
            
            <div>
               <form method='post' action="dropItem.php" >
            <button class="drop" type="submit" value="Submit"></button>
                  <select name='id' style="display:none" > <option value="<?php echo $id ?>"></option></select>

            </form>

            
      <select name='id' style="display:none" > <option value="<?php echo $id ?>"></option></select>
        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap"></div>
     
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad)?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
          <h5 class="series">Series: <?php echo $series ?></h5>
          <h5 class="repeticiones">Repeticiones: <?php echo $repeticiones ?> </h5>
      </div>

     
          </div>
            <?php

          }
          
        }
?>
