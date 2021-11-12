
<?php
include "connection.php";
session_start();
setlocale(LC_ALL,"spanish");

$correo=$_POST['correo'];
$contrasenya2=$_POST['contrasenya'];



/* $usr=$_POST['usr']
 */


/* $_SESSION['usr']=$_POST['usr'];
$_SESSION['contrasenya2']=$_POST['contrasenya']; */


$sql2 = "SELECT COUNT(*) as contar from usuario where correo='$correo' and contrasenya='$contrasenya2'";
$consultas=mysqli_query($con,$sql2);
$array = mysqli_fetch_array($consultas);
/* $sql2 = "SELECT nombre,contrasenya from usuario where nombre='".$usr."' && contrasenya='".$contrasenya2."'";*/

$sql3 = "SELECT nombre as nombreUsuario from usuario where correo='$correo'";
$consultasUser=mysqli_query($con,$sql3);
$knowUser = mysqli_fetch_array($consultasUser);
$nombreUsuario = $knowUser['nombreUsuario'];

$sql4 = "SELECT imagen as imagens from usuario where correo='$correo'";
$consultasFoto=mysqli_query($con,$sql4);
$knowFoto = mysqli_fetch_array($consultasFoto);
$fotoUsuario = $knowFoto['imagens'];



if($array ['contar']>0 ){?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
       <!--  <link rel="stylesheet" href="styles/styles.scss"> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>


<body class="bodyUserPage">
   



    



    
<div class=" d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark position-fixed" style="width: 250px;"> <a href="/" class="d-flex align-items-center mb-5 mb-md-5 me-md-auto text-white text-decoration-none"> <svg class="bi me-2" width="40" height="100"> </svg> <h2 class="fs-4 ">BreakEnds</h2> </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="#" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a> </li>
        <li> <a href="#" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Dashboard</span> </a> </li>
        <li> <a href="#" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">My Orders</span> </a> </li>
        <li> <a href="#" class="nav-link text-white"> <i class="fa fa-cog"></i><span class="ms-2">Settings</span> </a> </li>
        <li> <a href="#" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">Bookmarks</span> </a> </li>
    </ul>
        <h3 class="d-flex align-items-center text-white text-decoration-none nombre" aria-expanded="false"> <?php echo $nombreUsuario; ?></h3>

    <hr>

    <div  class=" text-center img-fluid" >  <img src="<?php echo $fotoUsuario; ?>" alt="" width="160" height="150" class="rounded-circle  fotoUser" >  
    </div>
</div>



    
    
<div class="container contenedorCentral">
  <div class="w dia">
    <h1><?php echo ucwords(strftime("%A"));  ?></h1>
  </div>
  <div class="container contenedorActividades">
    <div class="card-columns">
      <div class="card">
        
        <a href="#">
          <?php 
          $sqlImagenActividad="SELECT foto as imagenActividad,clase as claseActividad,subclase as subclaseActividad,nombre as nombreActividad from actividades where idUsuario= '$correo'";
          $consultaImagenActividad=mysqli_query($con,$sqlImagenActividad);
          $knowActividad = mysqli_fetch_array($consultaImagenActividad);
          $imagenActividad = $knowActividad["imagenActividad"];
          $claseActividad = $knowActividad["claseActividad"];
          $subClaseActividad = $knowActividad["subclaseActividad"];
          $nombreActividad =$knowActividad["nombreActividad"];
                   ?> 

        <img class="card-img-top" src= "<?php echo $imagenActividad?>" alt="Card image cap">
        <div class="card-body">
         
          <h5 class="card-title"><?php echo ucwords($nombreActividad) ?></h5>
          <p class="card-text"><?php echo  $claseActividad ?> - <?php echo $subClaseActividad?> </p>
      </div>
        </a>
          </div>

<!--  -->
           <div class="card">
        <a href="#">
        <img class="card-img-top" src="<?php echo $fotoUsuario; ?>"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, doloremque!</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto maxime nemo omnis praesentium similique.</p>
        </div>
        </a>
      </div>



        
    
     
      <div class="card">
        <a href="#">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1535086181678-5a5c4d23aa7d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=34c86263bec2c8f74ceb74e9f4c5a5fc&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur.</h5>
          <p class="card-text">Amet commodi deleniti enim laboriosam odio placeat praesentium quis ratione rerum suscipit.</p>
        </div>
        </a>
      </div>
      <div class="card">
        <a href="#">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1535074153497-b08c5aa9c236?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d2aaf944a59f16fe1fe72f5057b3a7dd&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur.</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </a>
      </div>
      <div class="card">
        <a href="#">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1535124406821-d2848dfbb25c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=98c434d75b44c9c23fc9df2a9a77d59f&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consequatur culpa cumque deserunt dignissimos error explicabo fugiat harum ipsam magni minus mollitia nemo perferendis qui repellendus rerum saepe vel voluptate voluptatem voluptatum!
            Aperiam, labore, molestiae!..</p>
        </div>
        </a>
      </div>
      <div class="card">
        <a href="#">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1508015926936-4eddcc6d4866?ixlib=rb-0.3.5&s=10b3a8717ab609be8d7786cab50c4e0b&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi debitis eaque explicabo fuga maiores necessitatibus, neque omnis optio vel!</p>
        </div>
        </a>
      </div>

  <div class="card">
        <a href="#">
        <img class="card-img-top" src="https://fundacionmasqueideas.org/wp-content/uploads/2014/03/logo-cruz-portada-fundacionMQI.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">AÑADIR ACTIVIDAD.</h5>
        </div>
        </a>
      </div>

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
