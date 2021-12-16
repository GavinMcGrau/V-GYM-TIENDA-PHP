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
  
        
        ?>
            
        <?php
            $sqlImagenActividad="SELECT nombre as nombreUsuario, contrasenya as contrasenyaUsuario,correo as correoUsuario,rol as rolUsuario,imagen as imagenUsuario,edad as edadUsuario,peso as pesoUsuario,altura as alturaUsuario from usuario";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowActividad = mysqli_fetch_array($consultaImagenActividad))!=NULL){
          $nombreUsuario = $knowActividad["nombreUsuario"];
          $contrasenyaUsuario = $knowActividad["contrasenyaUsuario"];
          $correoUsuario = $knowActividad["correoUsuario"];
          $rolUsuario = $knowActividad["rolUsuario"];
          $imagenUsuario =$knowActividad["imagenUsuario"];
          $edadUsuario= $knowActividad["edadUsuario"];
          $pesoUsuario = $knowActividad["pesoUsuario"];
          $alturaUsuario= $knowActividad["alturaUsuario"];
          
          
        
            ?> 

            

        
<!-- <div class="card-columns"> -->
          <div class="">
              
    <div class="card flip-card">
        <div class="flip-card-inner"> 
            <div class="flip-card-front"><!-- frente de la tarjeta -->
                <div class="mask">
                    <div class="align-end texto">
                        
                        <?php echo ucwords($correoUsuario); ?>
                    </div>
                </div>
                <img src="<?php echo $imagenUsuario;?>" alt="imagen"><!-- Imagen frontal -->
            </div>
            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                <div class="row no-gutters">
                    <div class="card-body">
                     <form method="POST" action="editarUsuario.php" enctype="multipart/form-data"  >
                         <h6>Nombre</h6>
                    <input type="text" name="nombreActividad" value="<?php echo $nombreUsuario ?>"> 
                    <h6>Correo</h6>
                    <input type="text" name="claseActividad" value="<?php echo $correoUsuario ?>"> 
                    <h6>Contrasenya</h6>
                    <input type="text" name="subClaseActividad" value="<?php echo $contrasenyaUsuario ?>">
                    <h6>Avatar</h6>
                    <input type="url" name="descripcionActividad" value="<?php echo $imagenUsuario?>">  
                    <h6>Peso</h6>
                    <input type="number" name="imagenActividad"  value="<?php echo $pesoUsuario?>">
                    <h6>Altura</h6>
                    <input type="number" name="imagenActividad"  value="<?php echo $alturaUsuario?>">
                    <h6>Edad</h6>
                    <input type="number" name="imagenActividad"  value="<?php echo $edadUsuario?>">
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
                                   <h6>Nombre</h6>
                                   <input type="text" name="nombreActividad" > 
                                    <h6>Clase</h6>
                                     <input type="text" name="claseActividad"> 
                                     <h6>Subclase</h6>
                                     <input type="text" name="subClaseActividad" >
                                     <h6>Video</h6>
                                     <input type="url" name="descripcionActividad" >  
                                     <h6>Foto</h6>
                                     <input type="url" name="imagenActividad" >
        <select name='idActividad' style="display:none" > <option value="<?php echo $idActividad ?>"></option></select>

        <button type="submit" class="botonBio" >Crear</button>

          </form>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              