<?php

session_start();
include "connection.php";


include "plantillaHtml.php";

?>
    <link rel="stylesheet" href="styles/stylesCards.css">

  
       

 <div class="container contenedorCentral">
   <?php 
        
        function anyadirActividad($nombreActividad,$claseActividad,$subClaseActividad,$descripcionActividad,$imagenActividad,$idUsuario,$series,$repeticiones,$dia){
            $sqlAnyadir ="INSERT INTO actividades (`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`, `repeticiones`, `dia`) VALUES ('','$nombreActividad','$imagenActividad','$claseActividad','$subClaseActividad','$descripcionActividad','','$idUsuario','$series','$repeticiones','$dia')";
            $consultaAnyadir=mysqli_query($con,$sqlAnyadir);
        }
        
        ?>
            
        <?php
 $sqlImagenActividad="SELECT foto as imagenActividad,descripcion as descripcionActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario=1";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowActividad = mysqli_fetch_array($consultaImagenActividad))!=NULL){
        
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
          $descripcionActividad= $knowActividad["descripcionActividad"];

            ?> 

        
<!-- <div class="card-columns"> -->
          <div class="card-columns col-15 mb-5">
              
    <div class="card flip-card">
        <div class="flip-card-inner"> 
            <div class="flip-card-front"><!-- frente de la tarjeta -->
                <div class="mask">
                    <div class="align-end texto">
                        <?php echo ucwords($nombreActividad) ?>
                    </div>
                </div>
                <img src="<?php echo $imagenActividad?>" alt="imagen"><!-- Imagen frontal -->
            </div>
            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                <div class="row no-gutters">
                    <div class="card-body">
                        <iframe class="videosYoutube" src="<?php echo $descripcionActividad ;?>"></iframe>

                    </div>
                </div>
            </div>
            
        </div>
        
       

    </div>
    <div class="hola" >
        <form method='post'  class='login' id='login' action='./login.php'>
<h5 style="color:white;">Series</h5>
<input name='Series' class='inputs' style="width:4vw;" placeholder='Series' type='number'  required autofocus>
<br>
<h5 style="color:white;">Repeticiones</h5>
<input name='Repeticiones' class=' ' style="width:4vw;"  placeholder='Repeticiones' type='number' required autofocus>
<br>
<div class="box">
<select>

	<option>lunes </option>
	<option>martes</option>
	<option>miercoles</option>
    <option>jueves </option>
    <option>viernes </option>
    <option>sabado</option>
    <option>domingo</option>

</select> 
<br>
<br>
 </div>
     <button class='enviarLogin' name='submit ' type='submit ' id='contact-submit ' data-submit='...Enviant '>Añadir</button>
 
 </form>
    </div>
    
  <!--   </div> -->
          
</div>
          
<?php }?>