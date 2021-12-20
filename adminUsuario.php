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
                    <div class="align-end texto" style="font-size:17px; margin-top:75%">
                        
                        <?php echo ucwords($correoUsuario); ?>
                        <br>
                        <?php echo ucwords($nombreUsuario); ?>
                    </div>
                </div>
                <img src="<?php echo $imagenUsuario;?>" alt="imagen" ><!-- Imagen frontal -->
            </div>
            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                <div class="row no-gutters">
                    <div class="card-body">
                     <form method="POST" action="editarUsuario.php" enctype="multipart/form-data"  >
                         <a>Nombre</a>
                    <input type="text" name="nombreUsuario" value="<?php echo $nombreUsuario ?>"> 
                    <br>
                    <a>Correo</a>
                
                    <input type="text" name="correoUsuario" value="<?php echo $correoUsuario ?>"> 
                    <br>
                    <a>Pass</a>
                    
                    <input type="password" name="contrasenyaUsuario" value="<?php echo $contrasenyaUsuario ?>">
                    <br>
                    <a>Avatar</a>
                    <input type="url" name="imagenUsuario" value="<?php echo $imagenUsuario?>">  
                    <br>
                    <a>Peso</a>
                    <input type="number" name="pesoUsuario"  value="<?php echo $pesoUsuario?>">
                <br>
                    <a>Altura</a>
                    <input type="number" name="alturaUsuario"  value="<?php echo $alturaUsuario?>">
                    <br>
                    <a>Edad</a>
                    <input type="number" name="edadUsuario"  value="<?php echo $edadUsuario?>">
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
                               <form method="POST" action="anyadirUsuarioAdmin.php" enctype="multipart/form-data" >
                                      <a>Nombre</a>
                    <input type="text" name="nombreUsuario" > 
                    <br>
                    <a>Correo</a>
                
                    <input type="text" name="contrasenyaUsuario" > 
                    <br>
                    <a>Pass</a>
                    
                    <input type="text" name="imagenUsuario" ">
                    <br>
                    <a>Avatar</a>
                    <input type="url" name="pesoUsuario" >  
                    <br>
                    <a>Peso</a>
                    <input type="number" name="alturaUsuario" >
                <br>
                    <a>Altura</a>
                    <input type="number" name="edadUsuario"  >
                    <br>
                    <a>Edad</a>
                    <input type="number" name="edadUsuario" >
        <select name='idActividad' style="display:none" > <option value="<?php echo $idActividad ?>"></option></select>

        <button type="submit" class="botonBio" >Crear</button>

          </form>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              