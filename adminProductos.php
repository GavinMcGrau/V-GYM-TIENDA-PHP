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
            $sqlImagenActividad="SELECT nombre as nombreProducto,id as idProducto, precio as precioProducto,imagen as imagenProducto from productos";
          $consultaProductos=mysqli_query($con,$sqlImagenActividad);
      
          while (($knowProducto = mysqli_fetch_array($consultaProductos))!=NULL){
          $nombreProducto = $knowProducto["nombreUsuario"];
          $precioProducto = $knowProducto["precioProducto"];
          $imagenProducto = $knowProducto["imagenProducto"];
          $idproducto = $knowProducto["idProducto"];
            ?> 

            

        
<!-- <div class="card-columns"> -->
          <div class="">
              
    <div class="card flip-card">
        <div class="flip-card-inner"> 
            <div class="flip-card-front"><!-- frente de la tarjeta -->
                <div class="mask">
                    <div class="align-end texto" style="font-size:17px; margin-top:75%">
                        
                        <?php echo ucwords($nombreProducto); ?>
                        <br>
                        <?php echo ucwords($nombreProducto); ?>
                    </div>
                </div>
                <img src="<?php echo $imagenProducto;?>" alt="imagen" >
            </div>
            <div class="flip-card-back"><!-- reverso de la tarjeta -->
                <div class="row no-gutters">
                    <div class="card-body">
                     <form method="POST" action="editarProducto.php" enctype="multipart/form-data"  >
                         <a>Nombre</a>
                    <input type="text" name="nombreProducto" value="<?php echo $nombreProducto ?>"> 
                    <br>
                    <a>Correo</a>
                
                    <input type="text" name="precioProducto" value="<?php echo $precioProducto ?>"> 
                    <br>
                    <a>Pass</a>
                    
                    <input type="text" name="imagenProducto" value="<?php echo $imagenProducto ?>">
                    <br>
                    
<select name='idProducto' style="display:none" > <option value="<?php echo $idproducto ?>"></option></select>

<button type="submit" class="botonBio" >Editar</button>
</form>
<form method='post' action="dropProducto.php" >
            <button class="dropActividad" type="submit" value="Submit"></button>
                  <select name='id' style="display:none" > <option value="<?php echo $idproducto ?>"></option></select>
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
              