<?php
session_start();
include "connection.php";
 include "plantillaHtmlAdmin.php";
if($correo == null || $rolUsuario != "admin"){
  header("Location: paginaUsuario.php");
}

?>

    <link rel="stylesheet" href="styles/stylesCards.css">
    <link rel="stylesheet" href="styles/stylesCardsAdmin.css">

  
       

 <div class="card-group">
   
        <?php
 $sqlImagenActividad="SELECT id as idActividad, foto as imagenActividad,descripcion as descripcionActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario=1";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowActividad = mysqli_fetch_array($consultaImagenActividad))!=NULL){
          $idActividad = $knowActividad["idActividad"];
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
          $descripcionActividad= $knowActividad["descripcionActividad"];
        
          
          
        
            ?> 

            

        
<!-- <div class="card-columns"> -->
          <div class="">
              
    <div class="card flip-card">
        <div class="flip-card-inner"> 
            <div class="flip-card-front"><!-- frente de la tarjeta -->
                <div class="mask">
                    <div class="align-end texto">
                        
                        <?php echo ucwords($nombreActividad); ?>
                    </div>
                </div>
                <img src="<?php echo $imagenActividad;?>" alt="imagen"><!-- Imagen frontal -->
            </div>
            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                <div class="row no-gutters">
                    <div class="card-body">
                     <form method="POST" action="editarActividades.php" enctype="multipart/form-data"  >
                         <h5>Nombre</h5>
                    <input type="text" name="nombreActividad" value="<?php echo $nombreActividad ?>"> 
                    <h5>Clase</h5>
                    <input type="text" name="claseActividad" value="<?php echo $claseActividad ?>"> 
                    <h5>Subclase</h5>
                    <input type="text" name="subClaseActividad" value="<?php echo $subClaseActividad ?>">
                    <h5>Video</h5>
                    <input type="url" name="descripcionActividad" value="<?php echo $descripcionActividad?>">  
                    <h5>Foto</h5>
                    <input type="url" name="imagenActividad"  value="<?php echo $imagenActividad?>">
<select name='idActividad' style="display:none" > <option value="<?php echo $idActividad ?>"></option></select>

<button type="submit" class="botonBio" >Editar</button>
</form>
<form method='post' action="dropItemAdmin.php" >
            <button class="dropActividad" type="submit" value="Submit"></button>
                  <select name='id' style="display:none" > <option value="<?php echo $idActividad ?>"></option></select>

  
                    </div>
                </div>
            </div>
            
        </div>
        
       

    </div>
    <div class="hola" >
 </form>
    </div>
    
  <!--   </div> -->
          
</div>
          <script src='node_modules/jquery/dist/jquery.min.js'>  </script>
<?php }?>

<div class="" style="    margin-left: 10vw ;">
              
              <div class="card flip-card">
                  <div class="flip-card-inner"> 
                      <div class="flip-card-front"><!-- frente de la tarjeta -->
                          <div class="mask">
                              <div class="align-end texto">
                                  
                                  Añadir Actividad
                              </div>
                          </div>
                          <img src="https://i.ibb.co/M2XtVZn/file-add-outline.png" alt="imagen"><!-- Imagen frontal -->
                      </div>
                      <div class="flip-card-back"><!-- reverso de la tarjeta -->
                          <div class="row no-gutters">
                              <div class="card-body">
                               <form method="POST" action="anyadirActividadAdmin.php" enctype="multipart/form-data" >
                                   <h5>Nombre</h5>
                                   <input type="text" name="nombreActividad" > 
                                    <h5>Clase</h5>
                                     <input type="text" name="claseActividad"> 
                                     <h5>Subclase</h5>
                                     <input type="text" name="subClaseActividad" >
                                     <h5>Video</h5>
                                     <input type="url" name="descripcionActividad" >  
                                     <h5>Foto</h5>
                                     <input type="url" name="imagenActividad" >
        <select name='idActividad' style="display:none" > <option value="<?php echo $idActividad ?>"></option></select>

        <button type="submit" class="botonBio" >Crear</button>

          </form>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              