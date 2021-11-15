<?php

session_start();
include "connection.php";


include "plantillaHtml.php";

?>
    <link rel="stylesheet" href="styles/stylesCards.css">

  
       

 <div class="container contenedorCentral">
  
            
        <?php
 $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario=1";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowActividad = mysqli_fetch_array($consultaImagenActividad))!=NULL){
        
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];

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
                        <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
                        <p class="card-text pl-2 mt-2"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="hola" >
        <form method='post'  class='login' id='login' action='./login.php'>

<input name='cantidad' class=' ' placeholder='0' type='number' required autofocus>

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
 </div>
     <button class='enviarLogin' name='submit ' type='submit ' id='contact-submit ' data-submit='...Enviant '>Añadir</button>
 
 </form>
    </div>
    
  <!--   </div> -->
          
</div>
          
<?php }?>