

<?php
session_start();
 include "connection.php";
 include "plantillaHtml.php";


 $sqlCountCarrito="SELECT COUNT(*) as contar, total as total  FROM `carrito` WHERE `idUsuario`='".$_SESSION['correo']."'";
$consultaSQLcarrito=mysqli_query($con,$sqlCountCarrito) ;

$contar= mysqli_fetch_array($consultaSQLcarrito);
 

if($contar['contar']>=1){

    $sqlTotal = "SELECT total as total FROM `carrito` WHERE idUsuario='".$_SESSION['correo']."' && id = (SELECT MAX(id) from carrito)";
$consultTotal=mysqli_query($con,$sqlTotal) ;
$sumaTotal= mysqli_fetch_array($consultTotal);
$totalProductos = $sumaTotal["total"];
    ?>
   
    <div class="carritoBox"><div class="carritoIcon"></div>
        <?php 
        $sqlProductos="SELECT nombre as nombre,id as idCarrito,precio as precio FROM carrito where `idUsuario`='".$_SESSION['correo']."'";
          $consultaProductosCarrito=mysqli_query($con,$sqlProductos);
                
          while ($knowProductosCarrito = mysqli_fetch_array($consultaProductosCarrito)){
              $nombreProductos = $knowProductosCarrito["nombre"];
          $precioProductos = $knowProductosCarrito["precio"];
          $idProductosCarrio= $knowProductosCarrito["idCarrito"];
         
        ?>
          <form method='post' action="dropItemCarrito.php" >
     <div class="itemsOnCarrito"> <h5><?php echo $nombreProductos;?> <br> <?php echo $precioProductos ;?> € </h5>
     
            <button class="dropCarrito" type="submit" value="Submit"></button>
            <select name='precioProducto' style="display:none" > <option value="<?php echo $precioProductos  ?>"></option></select>                                    <select name='idCarrito' style="display:none" > <option value="<?php echo $idProductosCarrio ?>"></option></select>

            </form>
    </div>
   <?php } ?>
<form action="pagarCarrito.php" method="POST">
    <select name='idCarrito' style="display:none" > <option value="<?php echo $totalProductos ?>"></option></select>
<div class="itemsOnCarrito"> <h5>Total: <?php echo $totalProductos; ?> € </h5></div>
<button class="checkCarrito" type="submit" value="Submit"  ></button>
</div>
</form>

<?php } ?>
 

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

            
      <select name='id' style="display:none" > <option value="<?php echo $idProductos ;?>"></option></select>
        <img class="card-img-top " src= "<?php echo $imagenProductos;?>" alt="Card image cap"></div>
     
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreProductos);?></h5>
          <p class="card-text">Precio: <?php echo  $precioProductos; ?> € </p>
          
      </div>

     
          </div>
            
        
          <?php }?>

          
        
