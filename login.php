
<?php
include "connection.php";

session_start();
setlocale(LC_ALL,"spanish");


$correo=$_POST['correo'];
$contrasenya2=$_POST['contrasenya'];
$_SESSION['correo']=$_POST['correo'];
$_SESSION['contrasenya']=$_POST['contrasenya'];

$sql2 = "SELECT COUNT(*) as contar from usuario where correo='$correo' and contrasenya='$contrasenya2'";
$consultas=mysqli_query($con,$sql2);
$array = mysqli_fetch_array($consultas);

if($array ['contar']>0 ){
  include "plantillaHtml.php";
  ?>

   
    
<div class="container contenedorCentral">
  <div class="w dia">
    <h1><?php echo ucwords(strftime("%A"));  ?></h1>
  </div>
  <div class="container contenedorActividades">
    <div class="card-columns">
      
        
      
      
          <?php 
 $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario= '$correo'";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
         
          while ($knowActividad = mysqli_fetch_array($consultaImagenActividad)){
 ;
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
            ?> 
            <div class="card">
        <a href="#">

        <img class="card-img-top " src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
      </div>
        </a>
          </div>
            <?php
//Operaciones a realizar

}
         
                   ?> 


    </div>
  </div>
</div>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

<?php
}else{?>
 
<!DOCTYPE html>
<html lang="en" class="bodyLogin" id="bodyLogin">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body >


<video autoplay muted loop id="backVideo">
    
            <source src="/src/videoplayback (1) (1).mp4 " type="video/mp4">
  </video>
    <div class=miau>
    

        <div class="mal" id="mal">Los datos son incorrectos
            <div class="imagenWrong" id="imagenWrong"></div>

            <button onclick="window.location.href='/prueba.php'" id="volver" class="volver">Volver</button>
 
        </div>


    </div>



</body>

</html>

<?php
}
?>


