

<?php
session_start();
 include "connection.php";
 include "plantillaHtml.php";

 $sqlCountActividad="SELECT COUNT(*) as contar FROM `carrito` WHERE `idUsuario`='".$_SESSION['correo']."'";
$consultaSQL=mysqli_query($con,$sqlCountActividad) ;

$contar= mysqli_fetch_array($consultaSQL);

if($contar['contar']>=1){
    ?>
    <div class="carritoBox"><div class="carritoIcon"></div></div>
    
    <?php
}
?>
   <link rel="stylesheet" href="styles.css">
<div class="container contenedorCentral">
  <div class="w dia">
    
  </div>    <h1 class="dias" ></h1>



  

  <div class="container contenedorActividades">
    <div class="card-columns">
<?php 



 $sqlProductos="SELECT nombre as nombre,precio as precio,id as id,imagen as imagen from productos";
          $consultaProductos=mysqli_query($con,$sqlProductos);
         
          while ($knowProductos = mysqli_fetch_array($consultaProductos)){
 
          $nombreProductos = $knowProductos["nombre"];
          $precioProductos = $knowProductos["precio"];
          $idProductos = $knowProductos["id"];
          $imagenProductos= $knowProductos["imagen"];

         

        
            ?> 
            
             <div class="card">
            
            <div>
               <form method='post' action="addItemCarrito.php" >
            <button class="add" type="submit" value="Submit"></button>
                  <select name='id' style="display:none" > <option value="<?php echo $idProductos ?>"></option></select>
                  <select name='nombreProductos' style="display:none" > <option value="<?php echo $nombreProductos ?>"></option></select>
                  <select name='precioProductos' style="display:none" > <option value="<?php echo $precioProductos?>"></option></select>
                  <select name='idProductos' style="display:none" > <option value="<?php echo $idProductos ?>"></option></select>
                  <select name='imagenProductos' style="display:none" > <option value="<?php echo $imagenProductos ?>"></option></select>

            </form>

            
      <select name='id' style="display:none" > <option value="<?php echo $idProductos ?>"></option></select>
        <img class="card-img-top " src= "<?php echo $imagenProductos?>" alt="Card image cap"></div>
     
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreProductos)?></h5>
          <p class="card-text">Precio: <?php echo  $precioProductos ?> € </p>
          
      </div>

     
          </div>
            
        
          <?php }?>
        
